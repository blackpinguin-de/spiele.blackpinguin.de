<?php

$id = (int) ($_GET['id'] ?? 0);

if (! $id) { exit('keine ID'); }

$succ = mail(
  'rcl@blackpinguin.de',
  "[WWW-Spiele] Ausleihen von Spiel ${id}",
  "Es wurde das Spiel mit der ID ${id} zum Ausleihen ausgewählt"
);

if ($succ) {
  exit('ok');
}
exit('Mailversand fehlgeschlagen');
