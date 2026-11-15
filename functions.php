<?php
function guvenliCikti($veri) {
    return htmlspecialchars(trim($veri), ENT_QUOTES, 'UTF-8');
}

function durumSayaci($dizi, $durum) {
    $sayac = 0;
    if (is_array($dizi)) {
        foreach ($dizi as $item) {
            if (isset($item['durum']) && $item['durum'] === $durum) {
                $sayac++;
            }
        }
    }
    return $sayac;
}

function rastgeleHaritaSec($oyun) {
    $haritalar = [
        "Valorant" => ["Ascent", "Bind", "Haven", "Split", "Lotus", "Sunset"],
        "CS2" => ["Mirage", "Inferno", "Dust II", "Nuke", "Ancient", "Anubis"],
        "League of Legends" => ["Sihirdar Vadisi", "ARAM"],
        "EA Sports FC 26" => ["Wembley Stadyumu", "Santiago Bernabeu", "Anfield"],
        "Apex Legends" => ["Dünya Kenarı", "Fırtına Noktası"]
    ];
    if (isset($haritalar[$oyun])) {
        $secenekler = $haritalar[$oyun];
        return $secenekler[array_rand($secenekler)];
    }
    return "Standart Arena";
}

function rastgeleSkorUret($oyun, $durum, &$ciktiDurum = 'Oynandı') {
    if ($durum === 'İptal') {
        $ciktiDurum = 'İptal';
        return 'İptal Edildi';
    }
    if ($durum === 'Bekliyor') {
        $ciktiDurum = 'Bekliyor';
        return '10 Dk Canlı Savaşta 🔴';
    }
    if (rand(1, 100) <= 15) {
        $ciktiDurum = 'İptal';
        return 'Hile Tespit Edildi - Diskalifiye 🚫';
    }
    $ciktiDurum = 'Oynandı';
    if ($oyun === 'Valorant' || $oyun === 'CS2') {
        $kazanan = rand(13, 15);
        $kaybeden = rand(0, 11);
        while ($kazanan === $kaybeden) {
            $kaybeden = rand(0, 11);
        }
        return "$kazanan - $kaybeden";
    } elseif ($oyun === 'League of Legends') {
        return "2 - " . rand(0, 1);
    } else {
        $p1 = rand(1, 4);
        $p2 = rand(0, 3);
        while ($p1 === $p2) { $p2 = rand(0, 3); }
        return "$p1 - $p2";
    }
}

function puanDurumuHesapla($turnuvalar) {
    $puanlar = [];
    $diskalifiyeTakimlar = [];
    if (!is_array($turnuvalar)) return [$puanlar, $diskalifiyeTakimlar];
    
    foreach ($turnuvalar as $t) {
        $p1 = $t['oyuncu_adi'] ?? '';
        $p2 = $t['rakip'] ?? '';
        $skorMetni = $t['skor'] ?? '';
        
        if (strpos($skorMetni, 'Hile') !== false || strpos($skorMetni, 'Diskalifiye') !== false) {
            if (!empty($p1)) $diskalifiyeTakimlar[$p1] = true;
            if (!empty($p2)) $diskalifiyeTakimlar[$p2] = true;
        }
        
        if (($t['durum'] ?? '') !== 'Oynandı') continue;
        
        $skorParcala = explode('-', $skorMetni);
        if (count($skorParcala) == 2) {
            $s1 = intval(trim($skorParcala[0]));
            $s2 = intval(trim($skorParcala[1]));
            
            if (!isset($puanlar[$p1])) $puanlar[$p1] = ['oynadi' => 0, 'galibiyet' => 0, 'maglubiyet' => 0, 'puan' => 0];
            if (!isset($puanlar[$p2])) $puanlar[$p2] = ['oynadi' => 0, 'galibiyet' => 0, 'maglubiyet' => 0, 'puan' => 0];
            
            $puanlar[$p1]['oynadi']++;
            $puanlar[$p2]['oynadi']++;
            
            if ($s1 > $s2) {
                $puanlar[$p1]['galibiyet']++;
                $puanlar[$p1]['puan'] += 3;
                $puanlar[$p2]['maglubiyet']++;
            } else {
                $puanlar[$p2]['galibiyet']++;
                $puanlar[$p2]['puan'] += 3;
                $puanlar[$p1]['maglubiyet']++;
            }
        }
    }
    
    uasort($puanlar, function($a, $b) {
        if ($a['puan'] == $b['puan']) return 0;
        return ($a['puan'] > $b['puan']) ? -1 : 1;
    });
    
    return [$puanlar, $diskalifiyeTakimlar];
}
?>