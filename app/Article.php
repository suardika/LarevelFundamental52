<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'body',
        'published_at',
        'user_id',
    ];

    /**
     * Additional fields to treat as Carbon instances
     *
     * @var array
     */
    protected $dates = ['published_at'];


    /**
     * Scope queries to articles that have been published.
     *
     * @param $query
     */
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }


//    public function scopeUnpublished($query)
//    {
//        $query->where('published_at', '>', Carbon::now());
//    }

    // setNameAttribute
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
//        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    /**
     * Get the published_at attribute
     *
     * @param $date
     * @return string
     */
    public function getPublishedAtAttribute($date)
    {
        return Carbon::parse($date)->format('Y-m-d');
//        return new Carbon($date);
    }


//    public function writer()
//    public function owner()
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the tags associated with the given article.     *
     *
     */
    
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    /**
     * Get a list of tag ids associated with the current article.
     *
     * @return array
     */
    public function getTagListAttribute()
    {
        return $this->tags->lists('id')->all();
    }

}
