<?php

namespace App;

use App\JobLocation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobApplication extends Model
{
    use Notifiable, SoftDeletes, HasFactory;

    protected $dates = ['dob', 'created_at'];

    protected $casts = [
        'skills' => 'array'
    ];

    protected $appends = ['resume_url', 'photo_url'];

    public function documents()
    {
        return $this->morphMany(Document::class, 'documentable');
    }

    public function resumeDocument()
    {
        return $this->morphOne(Document::class, 'documentable')->where('name', 'Resume');
    }

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }

    public function jobs()
    {
        return $this->belongsToMany(Job::class);
    }

    public function status()
    {
        return $this->belongsTo(ApplicationStatus::class, 'status_id');
    }

    public function schedule()
    {
        return $this->hasOne(InterviewSchedule::class)->latest();
    }

    public function onboard()
    {
        return $this->hasOne(Onboard::class);
    }

    public function getResumeUrlAttribute()
    {
        if ($this->documents()->where('name', 'Resume')->first()) {
            return asset_url_local_s3('documents/' . $this->id . '/' . $this->documents()->where('name', 'Resume')->first()->hashname);
        }
        return false;
    }

    public function notes()
    {
        return $this->hasMany(ApplicantNote::class, 'job_application_id')->orderBy('id', 'desc');
    }

    public function getPhotoUrlAttribute()
    {
        if (is_null($this->photo)) {
            return asset('avatar.png');
        }
        return asset_url_local_s3('candidate-photos/' . $this->photo);
    }

    public function answer()
    {
        return $this->belongsTo(JobApplicationAnswer::class, 'status_id');
    }

    public function location()
    {
        return $this->belongsTo(JobLocation::class, 'location_id');
    }
}
