<?php
// batch-roadmap.php: Automatisierter Import für Archives
require_once 'settings-common.php';  // Lade Konfig (falls nötig)

// Definiere Archives-Array (z. B. aus Verzeichnis laden)
$archives = glob('./proclaimarchive/*.prs');  // Oder manuell: array('file1.prs', 'file2.prs');

foreach ($archives as $file) {
    // Setze globale Vars für roadmap.php (aus Repo-Logik)
    $GLOBALS['file'] = $file;  // Oder passe Parameter an
    include 'roadmap.php';  // Generiert Roadmap für jedes File
    echo "Verarbeitet: $file\n";  // Logging
}

// Für große Files: Erhöhe Limits
ini_set('memory_limit', '512M');
ini_set('max_execution_time', 300);
?>
