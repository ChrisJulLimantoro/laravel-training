<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'person';

    protected $fillable = [
        'fname',
        'lname',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function updatePartial($id, $data)
    {
        $person = $this->find($id);

        foreach ($data as $key => $value) {
            $person->$key = $value;
        }

        $person->save();
        return $person;
    }

    public function deleteById($id)
    {
        $person = $this->find($id);
        $person->delete();
        return $person;
    }
}
