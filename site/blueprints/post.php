<?php if(!defined('KIRBY')) exit ?>

title: Post
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  Date:
    label: Date
    type:  date
  Time:
    label: Time
    type:  time
  videourl:
    label: Video Iframe
    type:  text
  text:
    label: Text
    type:  textarea
  tags:
    label: Tags
    type:  tags