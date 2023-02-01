<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';

    protected $fillable = [
        'coverImage',
        'profilePicture',
        'bio',
        'age',
        'residential_address',
        'postal_address',
        'cellphoneNumber',
        'next_of_kin_fullName',
        'next_of_kin_cellphoneNumber',
        'activities',
        'studentLevel',
        'gender',
        'grade',
        'instrument'
    ];

    protected $casts = [
        'activities' => 'array'
    ];

    static function getGrades(): array
    {
        return [
            (object)['name' => 'Grade R', 'value' => 'r'],
            (object)['name' => 'Grade 0', 'value' => '0'],
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
