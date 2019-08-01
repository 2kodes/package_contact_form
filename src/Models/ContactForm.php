<?php

namespace TwoKodes\Contactform\Models;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{

    protected $guarded = ["id"];

    protected $table = 'contact';
}
