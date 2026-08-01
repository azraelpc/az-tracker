<?php
// api.php
header('Content-Type: application/json');

$musicDir = './music'; // Carpeta donde tienes tus .mod, .xm, .it, .s3m, etc.
$allowedExtensions = ['mod', 'xm', 'it', 's3m', 's3', 'umx'];

function scanFolder($dir) {
    global $allowedExtensions;
    $result = [];
    if (!is_dir($dir)) return $result;
    
    $items = scandir($dir);
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') continue;
        $path = $dir . '/' . $item;
        
        if (is_dir($path)) {
            $result[] = [
                'name' => $item,
                'type' => 'folder',
                'children' => scanFolder($path)
            ];
        } else {
            $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
            if (in_array($ext, $allowedExtensions)) {
                $result[] = [
                    'name' => $item,
                    'type' => 'file',
                    'path' => substr($path, 2) // Quita el "./" inicial para dejar la ruta limpia (ej: music/cancion.mod)
                ];
            }
        }
    }
    return $result;
}

if (is_dir($musicDir)) {
    echo json_encode(scanFolder($musicDir));
} else {
    echo json_encode([]);
}
?>
