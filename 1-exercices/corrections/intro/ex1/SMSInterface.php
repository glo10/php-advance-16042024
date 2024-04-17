<?php

interface SMSInterface {
  function send(string $msg):string;
}