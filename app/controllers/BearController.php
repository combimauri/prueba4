<?php

class BearController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    function index() {
        return Bear::all();
    }

}