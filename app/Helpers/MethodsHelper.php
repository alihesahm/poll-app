<?php


use Illuminate\Support\Facades\Auth;



function currentUser()
{
    return Auth::guard('sanctum')->user();
}


function isAuthenticated(): ?bool
{
    return Auth::guard('sanctum')->check();
}



