<?php

//A class should have one and only one reason to change, meaning that a class should have only one job.
class User
{
    public function information()
    {
        // Implementing information() method.
    }
}

class Email
{
    public function send(User $user)
    {
         // Implementing send(User $user) method.
    }
}

class Order
{
    public function show(User $user)
    {
        // Implementing show(User $user) method.
    }
}