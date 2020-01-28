<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectGallery extends Model
{
    protected $fillable =['title'];
    protected $table="project_gallery";

    public function directusFiles(){
        return $this->belongsToMany('App\DirectusFiles','project_gallery_directus_files');
    }
}
