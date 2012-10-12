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

    protected function set_file_delete_url($file)
    {
        parent::set_file_delete_url($file);
        $file->delete_url = $this->options['router']->generate('audit_file_delete', array('file' => $file->name));
    }

}