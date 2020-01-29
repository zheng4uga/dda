<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DirectusFiles extends Model
{
    protected $table="directus_files";
    private $imagePrefix = 'cms/public/uploads/dda/originals/';

    public function imagePath(){
        return url($this->imagePrefix.$this->filename_disk);
    }
}
