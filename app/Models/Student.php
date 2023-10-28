<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cover_image',
        'profile_picture',
        'gender',
        'school_id',
        'residential_address',
        'date_of_birth',
        'postal_address',
        'cellphoneNumber',
        'next_of_kin_fullName',
        'next_of_kin_cellphoneNumber',
        'bio',
        'grade',
        'activities',
    ];

    protected $casts = [
        'activities' => 'array',
    ];

    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class);
    }

    public function userActivities(): HasMany
    {
        return $this->hasMany(UserActivity::class);
    }

    public function tutors(): BelongsToMany
    {
        return $this->belongsToMany(Tutor::class);
    }

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Parent::class);
    }

    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function likes(): HasMany
    {
        return $this->hasMany(Like::class);
    }

    public function followers(): HasMany
    {
        return $this->hasMany(Follower::class);
    }


    static function getGrades(): array
    {
        return [
            (object)['name' => 'Grade R', 'value' => 'r'],
            (object)['name' => 'Grade 0', 'value' => '0'],
            (object)['name' => 'Grade 1', 'value' => '1'],
            (object)['name' => 'Grade 2', 'value' => '2'],
            (object)['name' => 'Grade 3', 'value' => '3'],
            (object)['name' => 'Grade 4', 'value' => '4'],
            (object)['name' => 'Grade 5', 'value' => '5'],
            (object)['name' => 'Grade 6', 'value' => '6'],
            (object)['name' => 'Grade 7', 'value' => '7'],
            (object)['name' => 'Grade 8', 'value' => '8'],
            (object)['name' => 'Grade 9', 'value' => '9'],
            (object)['name' => 'Grade 10', 'value' => '10'],
            (object)['name' => 'Grade 11', 'value' => '11'],
            (object)['name' => 'Grade 12', 'value' => '12'],
            (object)['name' => 'Adult', 'value' => 'adult'],
        ];
    }

    static function getInstruments(): array{
        return [
            (object)['name' => 'Piano', 'value' => 'piano'],
            (object)['name' => 'Guitar', 'value' => 'guitar'],
            (object)['name' => 'Singing', 'value' => 'singing'],
            (object)['name' => 'Both Piano & Guitar', 'value' => 'both_piano_guitar'],
            (object)['name' => 'Both Piano & Singing', 'value' => 'both_piano_singing'],
            (object)['name' => 'Both Guitar & Singing', 'value' => 'both_guitar_singing'],
            (object)['name' => 'All', 'value' => 'all']
        ];
    }

}
