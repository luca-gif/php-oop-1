<?php

class Movie
{
  private $title;
  private $category;
  private $language;


  public function __construct($_title, $_category,  $_language = 'Inglese')
  {
    $this->title = $_title;
    $this->category = $_category;
    $this->language = $_language;
  }

  /* Inserisco i dati in un Array per poi ciclarlo */

  public function joinFilms()
  {
    $arrFilm = [];
    $arrFilm[] = $this->title;
    $arrFilm[] = $this->category;
    $arrFilm[] = $this->language;
    return $arrFilm;
  }

  /* insierisco i dati singolarmente */

  public function getTitle()
  {
    return $this->title;
  }

  public function getCategory()
  {
    return $this->category;
  }

  public function getLanguage()
  {
    return $this->language;
  }
};