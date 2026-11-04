<?php

$notes = [12, 15, 9, 14, 16];
function calculerSomme($notes)
{
    $somme = 0;
    foreach ($notes as $note) {
        $somme += $note;
    }
    return $somme;
}
function calculerMoyenne($notes)
{
    return calculerSomme($notes) / count($notes);
}
function calculerMaximum($notes)
{
    return max($notes);
}
function calculerMinimum($notes)
{
    return min($notes);
}
function compterNotesAdmis($notes)
{
    $nombre = 0;
    foreach ($notes as $note) {
        if ($note >= 10) {
            $nombre++;
        }
    }
    return $nombre;
}
echo "Somme : " . calculerSomme($notes) . "<br>";
echo "Moyenne : " . calculerMoyenne($notes) . "<br>";
echo "Maximum : " . calculerMaximum($notes) . "<br>";
echo "Minimum : " . calculerMinimum($notes) . "<br>";
echo "Notes >= 10 : " . compterNotesAdmis($notes);

?>