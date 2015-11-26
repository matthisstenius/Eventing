# Eventing

[![Build Status](https://travis-ci.org/matthisstenius/Eventing.svg?branch=v1.0.3)](https://travis-ci.org/matthisstenius/Eventing)

An EventRecorder and dispatcher for domain events

Default dispatcher and logging implementation is for Laravel 5.
You can add your own implementation by implementing the contratcs.

## Installation
Install visa composer:
`composer require "matthis/eventing:3.0.*"`

Then include `Matthis\Eventing\EventingServiceProvider` in your `config/app.php`

## Tests
`vendor/bin/phpspec run`
