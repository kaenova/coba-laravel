<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $fillable = [
        'name', 'phone', 'address'
    ];

   public function __construct(string $name, string $phone, string $address)
   {
       $this->name = $name;
       $this->phone = $phone;
       $this->address = $address;
   }

   /**
    * @return string
    */
   public function getName(): string
   {
       return $this->name;
   }

   /**
    * @param string $name
    */
   public function setName(string $name): void
   {
       $this->name = $name;
   }

   /**
    * @return string
    */
   public function getPhone(): string
   {
       return $this->phone;
   }

   /**
    * @param string $phone
    */
   public function setPhone(string $phone): void
   {
       $this->phone = $phone;
   }

   /**
    * @return string
    */
   public function getAddress(): string
   {
       return $this->address;
   }

   /**
    * @param string $address
    */
   public function setAddress(string $address): void
   {
       $this->address = $address;
   }
}
