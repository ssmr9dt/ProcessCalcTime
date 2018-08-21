<?php

namespace ssmr9dt;

class ProcessCalcTime
{
  private $file_name = "process_time.log";
  private $tag = "Tag";
  private $start_time = 0;

  public function __construct($tag)
  {
    $this->tag = $tag;
    $this->start_time = microtime(true);
  }

  public function setFileName($file_name)
  {
    $this->file_name = $file_name;
  }

  public function finish()
  {
    $time = microtime(true) - $this->start_time;
    $time = sprintf("%.2f", $time);
    // file_put_contents($this->file_name,
    //   [$this->tag, " start => ", date("Y/m/j H:i:s",microtime(true)), "\n"], FILE_APPEND);

    file_put_contents($this->file_name,
      [$this->tag, " => ", $time, "sec\n"], FILE_APPEND);
  }
}
