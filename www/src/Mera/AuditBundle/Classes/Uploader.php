<?php
namespace Mera\AuditBundle\Classes;
class Uploader extends UploadHandler
{
    public function __construct($opt)
    {
        parent::__construct($opt, "");
        if (!file_exists($this->options['upload_dir'])) {
            mkdir($this->options['upload_dir'], 0777, true);
        }
        if (!file_exists($this->options['image_versions']['thumbnail']['upload_dir'])) {
            mkdir($this->options['image_versions']['thumbnail']['upload_dir'], 0777, true);
        }
    }


    protected function handle_file_upload($uploaded_file, $name, $size, $type, $error)
    {
        $file = parent::handle_file_upload($uploaded_file, $name, $size, $type, $error);


        $upload_dir = $this->options['upload_dir'];
        $thumb_dir = $this->options['image_versions']['thumbnail']['upload_dir'];

        $fileParts = explode('.', $file->name);
        $ext = array_pop($fileParts);
        $file->hash = $this->getHash($file) . ".$ext";


        rename($upload_dir . $file->name, $upload_dir . $file->hash);
        rename($thumb_dir . $file->name, $thumb_dir . $file->hash);

        $file->url = $this->options['upload_url'] . rawurlencode($file->hash);
        $file->thumbnail_url = $this->options['image_versions']['thumbnail']['upload_url'] . rawurlencode($file->hash);

        $file->delete_url = $this->options['router']->generate('audit_file_delete', array('id' => $this->options['common']->getId(), 'fileName' => $file->hash, 'fileType' => $this->options['file_type']));
        return $file;
    }

    public function deleteFile($fileName)
    {
        $file_name = basename(stripslashes($fileName));
        $file_path = $this->options['upload_dir'] . $file_name;
        $success = is_file($file_path) && $file_name[0] !== '.' && unlink($file_path);
        if ($success) {
            foreach ($this->options['image_versions'] as $version => $options) {
                $file = $options['upload_dir'] . $file_name;
                if (is_file($file)) {
                    unlink($file);
                }
            }
        }
        header('Content-type: application/json');
        return $success;
    }

    private function getHash($file)
    {
        return md5($file->name . $this->options['common']->getId() . "lolol" . microtime(true));

    }

}