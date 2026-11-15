<?php
session_start();
require_once 'functions.php';

if (!isset($_SESSION['turnuva_versiyonu']) || $_SESSION['turnuva_versiyonu'] !== 'v19.0') {
    $_SESSION['turnuvalar'] = [
        // --- 1. HAFTA / BUGÜN (8 Maç / 16 Farklı Takım - Tarih: 2026-11-15) ---
        ["id" => 1, "oyuncu_adi" => "BBL Esports", "rakip" => "Fnatic", "oyun" => "Valorant", "asama" => "Çeyrek Final", "harita" => "Ascent", "tarih" => "2026-11-15", "skor" => "10 Dk Canlı Savaşta 🔴", "durum" => "Bekliyor"],
        ["id" => 2, "oyuncu_adi" => "Fut Esports", "rakip" => "Sentinels", "oyun" => "Valorant", "asama" => "Çeyrek Final", "harita" => "Bind", "tarih" => "2026-11-15", "skor" => "10 Dk Canlı Savaşta 🔴", "durum" => "Bekliyor"],
        ["id" => 3, "oyuncu_adi" => "Eternal Fire", "rakip" => "Natus Vincere", "oyun" => "CS2", "asama" => "Çeyrek Final", "harita" => "Mirage", "tarih" => "2026-11-15", "skor" => "10 Dk Canlı Savaşta 🔴", "durum" => "Bekliyor"],
        ["id" => 4, "oyuncu_adi" => "Beşiktaş Esports", "rakip" => "G2 Esports", "oyun" => "CS2", "asama" => "Çeyrek Final", "harita" => "Inferno", "tarih" => "2026-11-15", "skor" => "10 Dk Canlı Savaşta 🔴", "durum" => "Bekliyor"],
        ["id" => 5, "oyuncu_adi" => "Galatasaray Espor", "rakip" => "T1", "oyun" => "League of Legends", "asama" => "Çeyrek Final", "harita" => "Sihirdar Vadisi", "tarih" => "2026-11-15", "skor" => "10 Dk Canlı Savaşta 🔴", "durum" => "Bekliyor"],
        ["id" => 6, "oyuncu_adi" => "Fenerbahçe Espor", "rakip" => "Team Liquid", "oyun" => "League of Legends", "asama" => "Çeyrek Final", "harita" => "ARAM", "tarih" => "2026-11-15", "skor" => "10 Dk Canlı Savaşta 🔴", "durum" => "Bekliyor"],
        ["id" => 7, "oyuncu_adi" => "Dark Passage", "rakip" => "Paper Rex", "oyun" => "Valorant", "asama" => "Çeyrek Final", "harita" => "Haven", "tarih" => "2026-11-15", "skor" => "10 Dk Canlı Savaşta 🔴", "durum" => "Bekliyor"],
        ["id" => 8, "oyuncu_adi" => "SuperMassive", "rakip" => "JD Gaming", "oyun" => "League of Legends", "asama" => "Çeyrek Final", "harita" => "Sihirdar Vadisi", "tarih" => "2026-11-15", "skor" => "10 Dk Canlı Savaşta 🔴", "durum" => "Bekliyor"],

        // --- 2. HAFTA / GELECEK (8 Maç / Farklı 16 Takım - Tarih: 2026-11-22) ---
        ["id" => 9, "oyuncu_adi" => "Team Heretics", "rakip" => "DRX", "oyun" => "Valorant", "asama" => "Çeyrek Final", "harita" => "Lotus", "tarih" => "2026-11-22", "skor" => "10 Dk Canlı Savaşta 🔴", "durum" => "Bekliyor"],
        ["id" => 10, "oyuncu_adi" => "Cloud9", "rakip" => "NRG", "oyun" => "Valorant", "asama" => "Çeyrek Final", "harita" => "Sunset", "tarih" => "2026-11-22", "skor" => "10 Dk Canlı Savaşta 🔴", "durum" => "Bekliyor"],
        ["id" => 11, "oyuncu_adi" => "Team Vitality", "rakip" => "FaZe Clan", "oyun" => "CS2", "asama" => "Çeyrek Final", "harita" => "Nuke", "tarih" => "2026-11-22", "skor" => "10 Dk Canlı Savaşta 🔴", "durum" => "Bekliyor"],
        ["id" => 12, "oyuncu_adi" => "MOUZ", "rakip" => "Astralis", "oyun" => "CS2", "asama" => "Çeyrek Final", "harita" => "Ancient", "tarih" => "2026-11-22", "skor" => "10 Dk Canlı Savaşta 🔴", "durum" => "Bekliyor"],
        ["id" => 13, "oyuncu_adi" => "Gen.G", "rakip" => "EDward Gaming", "oyun" => "League of Legends", "asama" => "Çeyrek Final", "harita" => "Sihirdar Vadisi", "tarih" => "2026-11-22", "skor" => "10 Dk Canlı Savaşta 🔴", "durum" => "Bekliyor"],
        ["id" => 14, "oyuncu_adi" => "Weibo Gaming", "rakip" => "Bilibili Gaming", "oyun" => "League of Legends", "asama" => "Çeyrek Final", "harita" => "ARAM", "tarih" => "2026-11-22", "skor" => "10 Dk Canlı Savaşta 🔴", "durum" => "Bekliyor"],
        ["id" => 15, "oyuncu_adi" => "KRÜ Esports", "rakip" => "Leviatán", "oyun" => "Valorant", "asama" => "Çeyrek Final", "harita" => "Split", "tarih" => "2026-11-22", "skor" => "10 Dk Canlı Savaşta 🔴", "durum" => "Bekliyor"],
        ["id" => 16, "oyuncu_adi" => "MAD Lions KOI", "rakip" => "GIANTX", "oyun" => "League of Legends", "asama" => "Çeyrek Final", "harita" => "Sihirdar Vadisi", "tarih" => "2026-11-22", "skor" => "10 Dk Canlı Savaşta 🔴", "durum" => "Bekliyor"]
    ];
    $_SESSION['loglar'] = ["TurnuvaX İki Haftalık 8'er Maçlık (Toplam 16 Maç) Fikstür Yapısı Kuruldu."];
    $_SESSION['turnuva_versiyonu'] = 'v19.0';
}

$hataMesaji = "";
$duzenlenecekKayit = null;
$bilgiMesaji = $_SESSION['bilgi'] ?? "";
unset($_SESSION['bilgi']);
$bugunTarih = date('Y-m-d');

// --- 1. ÇEYREK FİNALİ OYNAT ---
if (isset($_GET['action']) && $_GET['action'] === 'oyna_ceyrek') {
    $oynananSayisi = 0;
    foreach ($_SESSION['turnuvalar'] as $key => $t) {
        if ($t['asama'] === 'Çeyrek Final' && $t['durum'] === 'Bekliyor') {
            if ($t['tarih'] <= $bugunTarih) {
                $yeniDurum = 'Oynandı';
                $_SESSION['turnuvalar'][$key]['skor'] = rastgeleSkorUret($t['oyun'], 'Oynandı', $yeniDurum);
                $_SESSION['turnuvalar'][$key]['durum'] = $yeniDurum;
                $oynananSayisi++;
            }
        }
    }
    if ($oynananSayisi > 0) {
        array_unshift($_SESSION['loglar'], "Bugünün 8 maçlık Çeyrek Final serisi simüle edildi.");
    } else {
        array_unshift($_SESSION['loglar'], "Bugün oynanması gereken aktif maç yok (Gelecek haftanın 8 maçlık serisi bekleniyor).");
    }
    header("Location: index.php");
    exit;
}

if (isset($_GET['action']) && $_GET['action'] === 'gec_yari') {
    $yariVar = false;
    foreach ($_SESSION['turnuvalar'] as $t) {
        if ($t['asama'] === 'Yarı Final') $yariVar = true;
    }
    
    if (!$yariVar) {
        $kazananlar = [];
        foreach ($_SESSION['turnuvalar'] as $t) {
            if ($t['asama'] === 'Çeyrek Final' && $t['durum'] === 'Oynandı') {
                $p = explode('-', $t['skor']);
                if (count($p) == 2) {
                    $s1 = intval(trim($p[0]));
                    $s2 = intval(trim($p[1]));
                    if ($s1 > $s2) $kazananlar[] = $t['oyuncu_adi'];
                    else $kazananlar[] = $t['rakip'];
                }
            }
        }
        
        list($puanlar, $diskalifiyeTakimlar) = puanDurumuHesapla($_SESSION['turnuvalar']);
        
        if (count($kazananlar) >= 2) {
            $yeniID = max(array_column($_SESSION['turnuvalar'], 'id')) + 1;
            for ($i = 0; $i < count($kazananlar) - 1; $i += 2) {
                if (isset($diskalifiyeTakimlar[$kazananlar[$i]]) || isset($diskalifiyeTakimlar[$kazananlar[$i+1]])) {
                    continue;
                }
                $yeniDurum = 'Oynandı';
                $skorSim = rastgeleSkorUret("Valorant", "Oynandı", $yeniDurum);
                $_SESSION['turnuvalar'][] = [
                    "id" => $yeniID++,
                    "oyuncu_adi" => $kazananlar[$i],
                    "rakip" => $kazananlar[$i+1],
                    "oyun" => "Valorant",
                    "asama" => "Yarı Final",
                    "harita" => rastgeleHaritaSec("Valorant"),
                    "tarih" => $bugunTarih,
                    "skor" => $skorSim,
                    "durum" => $yeniDurum
                ];
            }
            array_unshift($_SESSION['loglar'], "Yarı Final eşleşmeleri oluşturuldu ve oynatıldı!");
        } else {
            $_SESSION['bilgi'] = "Yarı finale geçmek için tamamlanmış çeyrek final maçlarına ihtiyaç var!";
        }
    }
    header("Location: index.php");
    exit;
}

if (isset($_GET['action']) && $_GET['action'] === 'goster_kazanan') {
    $finalVar = false;
    foreach ($_SESSION['turnuvalar'] as $t) {
        if ($t['asama'] === 'Büyük Final') $finalVar = true;
    }
    
    if (!$finalVar) {
        $yariKazananlar = [];
        foreach ($_SESSION['turnuvalar'] as $t) {
            if ($t['asama'] === 'Yarı Final' && $t['durum'] === 'Oynandı') {
                $p = explode('-', $t['skor']);
                if (count($p) == 2) {
                    $s1 = intval(trim($p[0]));
                    $s2 = intval(trim($p[1]));
                    if ($s1 > $s2) $yariKazananlar[] = $t['oyuncu_adi'];
                    else $yariKazananlar[] = $t['rakip'];
                }
            }
        }
        
        list($puanlar, $diskalifiyeTakimlar) = puanDurumuHesapla($_SESSION['turnuvalar']);
        
        if (count($yariKazananlar) >= 2) {
            if (!isset($diskalifiyeTakimlar[$yariKazananlar[0]]) && !isset($diskalifiyeTakimlar[$yariKazananlar[1]])) {
                $yeniID = max(array_column($_SESSION['turnuvalar'], 'id')) + 1;
                $yeniDurum = 'Oynandı';
                $skorFinal = rastgeleSkorUret("Valorant", "Oynandı", $yeniDurum);
                $_SESSION['turnuvalar'][] = [
                    "id" => $yeniID,
                    "oyuncu_adi" => $yariKazananlar[0],
                    "rakip" => $yariKazananlar[1],
                    "oyun" => "Valorant",
                    "asama" => "Büyük Final",
                    "harita" => rastgeleHaritaSec("Valorant"),
                    "tarih" => $bugunTarih,
                    "skor" => $skorFinal,
                    "durum" => $yeniDurum
                ];
                array_unshift($_SESSION['loglar'], "Büyük Final oynandı ve Şampiyon belli oldu!");
            } else {
                $_SESSION['bilgi'] = "Finalist takımlardan birinde hile tespit edildiği için final oynatılamadı!";
            }
        } else {
            $_SESSION['bilgi'] = "Büyük final için yarı final maçlarının tamamlanması gerekiyor!";
        }
    }
    header("Location: index.php");
    exit;
}

if (isset($_GET['reset']) && $_GET['reset'] === '1') {
    unset($_SESSION['turnuvalar'], $_SESSION['loglar'], $_SESSION['turnuva_versiyonu'], $_SESSION['bilgi']);
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ekle'])) {
    $oyuncuAdi = trim($_POST['oyuncu_adi'] ?? '');
    $rakip = trim($_POST['rakip'] ?? '');
    $oyun = trim($_POST['oyun'] ?? '');
    $asama = trim($_POST['asama'] ?? 'Çeyrek Final');
    $tarih = $_POST['tarih'] ?? '';
    $durum = $_POST['durum'] ?? 'Bekliyor';
    
    if (empty($oyuncuAdi) || empty($rakip) || empty($oyun) || empty($tarih)) {
        $hataMesaji = "Tüm alanları doldurunuz!";
    } elseif ($oyuncuAdi === $rakip) {
        $hataMesaji = "Takımlar aynı olamaz!";
    } else {
        $durumSonuc = $durum;
        $skor = rastgeleSkorUret($oyun, $durum, $durumSonuc);
        $harita = rastgeleHaritaSec($oyun);
        $yeniID = count($_SESSION['turnuvalar']) > 0 ? max(array_column($_SESSION['turnuvalar'], 'id')) + 1 : 1;
        
        $_SESSION['turnuvalar'][] = [
            "id" => $yeniID,
            "oyuncu_adi" => $oyuncuAdi,
            "rakip" => $rakip,
            "oyun" => $oyun,
            "asama" => $asama,
            "harita" => $harita,
            "tarih" => $tarih,
            "skor" => $skor,
            "durum" => $durumSonuc
        ];
        array_unshift($_SESSION['loglar'], "Maç eklendi: $oyuncuAdi vs $rakip");
        header("Location: index.php");
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['guncelle'])) {
    $id = intval($_POST['id']);
    $oyuncuAdi = trim($_POST['oyuncu_adi'] ?? '');
    $rakip = trim($_POST['rakip'] ?? '');
    $oyun = trim($_POST['oyun'] ?? '');
    $asama = trim($_POST['asama'] ?? '');
    $tarih = $_POST['tarih'] ?? '';
    $durum = $_POST['durum'] ?? '';
    
    $durumSonuc = $durum;
    $skor = rastgeleSkorUret($oyun, $durum, $durumSonuc);

    foreach ($_SESSION['turnuvalar'] as $key => $item) {
        if ($item['id'] === $id) {
            $_SESSION['turnuvalar'][$key]['oyuncu_adi'] = $oyuncuAdi;
            $_SESSION['turnuvalar'][$key]['rakip'] = $rakip;
            $_SESSION['turnuvalar'][$key]['oyun'] = $oyun;
            $_SESSION['turnuvalar'][$key]['asama'] = $asama;
            $_SESSION['turnuvalar'][$key]['tarih'] = $tarih;
            $_SESSION['turnuvalar'][$key]['durum'] = $durumSonuc;
            $_SESSION['turnuvalar'][$key]['skor'] = $skor;
            break;
        }
    }
    array_unshift($_SESSION['loglar'], "Maç #$id güncellendi.");
    header("Location: index.php");
    exit;
}

if (isset($_GET['duzenle_id'])) {
    $duzenleID = intval($_GET['duzenle_id']);
    foreach ($_SESSION['turnuvalar'] as $item) {
        if ($item['id'] === $duzenleID) {
            $duzenlenecekKayit = $item;
            break;
        }
    }
}

if (isset($_GET['sil_id'])) {
    $silID = intval($_GET['sil_id']);
    foreach ($_SESSION['turnuvalar'] as $key => $deger) {
        if ($deger['id'] === $silID) {
            unset($_SESSION['turnuvalar'][$key]);
            break;
        }
    }
    $_SESSION['turnuvalar'] = array_values($_SESSION['turnuvalar']);
    array_unshift($_SESSION['loglar'], "Maç #$silID silindi.");
    header("Location: index.php");
    exit;
}

if (isset($_GET['iptal_id'])) {
    $iptalID = intval($_GET['iptal_id']);
    foreach ($_SESSION['turnuvalar'] as $key => $deger) {
        if ($deger['id'] === $iptalID) {
            $_SESSION['turnuvalar'][$key]['durum'] = 'İptal';
            $_SESSION['turnuvalar'][$key]['skor'] = 'İptal Edildi';
            break;
        }
    }
    array_unshift($_SESSION['loglar'], "Maç #$iptalID iptal edildi.");
    header("Location: index.php");
    exit;
}

$secilenFiltre = $_GET['filtre_durum'] ?? 'Tümü';
$aramaKelimesi = trim($_GET['q'] ?? '');
$gosterilecekListe = $_SESSION['turnuvalar'];

if ($secilenFiltre !== 'Tümü') {
    $gosterilecekListe = array_filter($gosterilecekListe, fn($item) => ($item['durum'] ?? '') === $secilenFiltre);
}

if (!empty($aramaKelimesi)) {
    $gosterilecekListe = array_filter($gosterilecekListe, fn($item) => 
        mb_stripos($item['oyuncu_adi'] ?? '', $aramaKelimesi) !== false OR 
        mb_stripos($item['rakip'] ?? '', $aramaKelimesi) !== false OR 
        mb_stripos($item['oyun'] ?? '', $aramaKelimesi) !== false
    );
}

$aktifMasalar = [];
$gelecekMasalar = [];

foreach ($gosterilecekListe as $m) {
    if ($m['tarih'] > $bugunTarih && $m['durum'] === 'Bekliyor') {
        $gelecekMasalar[] = $m;
    } else {
        $aktifMasalar[] = $m;
    }
}

list($puanTablosu, $diskalifiyeTakimlar) = puanDurumuHesapla($_SESSION['turnuvalar']);

$sampiyonAdi = "";
foreach ($_SESSION['turnuvalar'] as $t) {
    if (($t['asama'] ?? '') === 'Büyük Final' && ($t['durum'] ?? '') === 'Oynandı') {
        $p = explode('-', $t['skor']);
        if (count($p) == 2) {
            $s1 = intval(trim($p[0]));
            $s2 = intval(trim($p[1]));
            $sampiyonAdi = ($s1 > $s2) ? $t['oyuncu_adi'] : $t['rakip'];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>TurnuvaX - Şampiyona Paneli</title>
    <link rel="stylesheet" href="assets/style.css?v=190">
</head>
<body>
    <div class="dashboard-wrapper">
        <div class="sidebar">
            <h2>TurnuvaX ⚡</h2>
            <ul>
                <li><a href="index.php" class="active">Ana Konsol</a></li>
                <li><a href="index.php?filtre_durum=Oynandı">Oynanan Maçlar</a></li>
                <li><a href="index.php?filtre_durum=Bekliyor">Canlı Savaşlar 🔴</a></li>
                <li><a href="index.php?filtre_durum=İptal">İptal / Diskalifiye</a></li>
                <li style="margin-top: 15px;"><a href="index.php?reset=1" onclick="return confirm('Sıfırlansın mı?');" style="color: #f87171;">Verileri Sıfırla</a></li>
            </ul>
        </div>

        <div class="main-content">
            <header>
                <h1>TurnuvaX Yönetim Paneli</h1>
                <p>Uluslararası E-Spor Simülasyon Sistemi (Bugün: <?php echo $bugunTarih; ?>)</p>
            </header>

            <?php if (!empty($sampiyonAdi)): ?>
                <div style="background-color: #131b2e; border: 1px solid #334155; color: #f8fafc; padding: 20px; border-radius: 8px; margin-top: 24px; text-align: center;">
                    <h2 style="margin: 0; font-size: 20px;">🏆 TURNUVA BÜYÜK ŞAMPİYONU: <?php echo guvenliCikti($sampiyonAdi); ?> 🏆</h2>
                </div>
            <?php endif; ?>

            <div class="panel-card">
                <h3 style="color: #f8fafc; margin-top: 0; font-size: 15px;">🎮 Turnuva Aşama Kontrol Paneli</h3>
                <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-top: 10px;">
                    <a href="index.php?action=oyna_ceyrek" class="btn-stage">▶️ 1. Tarihi Gelen Çeyrekleri Oynat (8 Maç)</a>
                    <a href="index.php?action=gec_yari" class="btn-stage">⚡ 2. Yarı Finale Geç & Oynat</a>
                    <a href="index.php?action=goster_kazanan" class="btn-stage">🏆 3. Büyük Finali Oynat</a>
                </div>
            </div>

            <?php if (!empty($bilgiMesaji)): ?>
                <div style="background: rgba(245, 158, 11, 0.15); border: 1px solid rgba(245, 158, 11, 0.3); color: #fbbf24; padding: 12px; border-radius: 6px; margin-top: 20px; font-size: 13px;">
                    ⚠️ <?php echo guvenliCikti($bilgiMesaji); ?>
                </div>
            <?php endif; ?>

            <div class="stats-container">
                <div class="stat-card">
                    <span>TOPLAM MAÇ</span>
                    <h2><?php echo count($_SESSION['turnuvalar']); ?></h2>
                </div>
                <div class="stat-card">
                    <span>TAMAMLANAN</span>
                    <h2 style="color: #34d399;"><?php echo durumSayaci($_SESSION['turnuvalar'], 'Oynandı'); ?></h2>
                </div>
                <div class="stat-card">
                    <span>CANLI SAVAŞ</span>
                    <h2 style="color: #fbbf24;"><?php echo durumSayaci($_SESSION['turnuvalar'], 'Bekliyor'); ?></h2>
                </div>
            </div>

            <div class="panel-card">
                <h3 style="color: #f8fafc; margin-top: 0; font-size: 15px;">📊 Puan Durumu</h3>
                <?php if (count($puanTablosu) > 0 || count($diskalifiyeTakimlar) > 0): ?>
                    <table class="leaderboard-table">
                        <thead>
                            <tr style="color: #64748b;">
                                <th>Takım</th>
                                <th style="text-align: center;">Oynanan</th>
                                <th style="text-align: center;">G</th>
                                <th style="text-align: center;">M</th>
                                <th style="text-align: center; color: #38bdf8;">Puan</th>
                                <th style="text-align: center;">Durum</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $tumTakimlar = array_unique(array_merge(array_keys($puanTablosu), array_keys($diskalifiyeTakimlar)));
                            foreach ($tumTakimlar as $takim):
                                $istatistik = $puanTablosu[$takim] ?? ['oynadi' => 0, 'galibiyet' => 0, 'maglubiyet' => 0, 'puan' => 0];
                            ?>
                                <tr>
                                    <td style="font-weight: 600;"><?php echo guvenliCikti($takim); ?></td>
                                    <td style="text-align: center; color: #94a3b8;"><?php echo $istatistik['oynadi']; ?></td>
                                    <td style="text-align: center; color: #34d399;"><?php echo $istatistik['galibiyet']; ?></td>
                                    <td style="text-align: center; color: #f87171;"><?php echo $istatistik['maglubiyet']; ?></td>
                                    <td style="text-align: center; font-weight: bold; color: #38bdf8;"><?php echo $istatistik['puan']; ?></td>
                                    <td style="text-align: center;">
                                        <?php if (isset($diskalifiyeTakimlar[$takim])): ?>
                                            <span style="color: #fca5a5; font-size: 11px; background: rgba(239, 68, 68, 0.2); padding: 3px 8px; border-radius: 4px;">Diskalifiye 🚫</span>
                                        <?php elseif ($istatistik['maglubiyet'] > 0): ?>
                                            <span style="color: #f87171; font-size: 11px; background: rgba(220, 38, 38, 0.2); padding: 3px 8px; border-radius: 4px;">Elendi ❌</span>
                                        <?php else: ?>
                                            <span style="color: #34d399; font-size: 11px; background: rgba(16, 185, 129, 0.2); padding: 3px 8px; border-radius: 4px;">Devam 🟢</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p style="color: #64748b; font-size: 13px;">Henüz maç sonucu yok.</p>
                <?php endif; ?>
            </div>

            <?php if (!empty($hataMesaji)): ?>
                <div style="background: rgba(220, 38, 38, 0.2); color: #fca5a5; padding: 12px; border-radius: 8px; margin-top: 20px;">
                    <?php echo guvenliCikti($hataMesaji); ?>
                </div>
            <?php endif; ?>

            <div class="grid-layout">
                <div class="panel-card" style="margin-top: 0;">
                    <?php if ($duzenlenecekKayit): ?>
                        <h3>Maç Düzenle (#<?php echo $duzenlenecekKayit['id']; ?>)</h3>
                        <form action="index.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $duzenlenecekKayit['id']; ?>">
                            <label>1. Takım:</label>
                            <input type="text" name="oyuncu_adi" value="<?php echo guvenliCikti($duzenlenecekKayit['oyuncu_adi']); ?>" required>
                            <label>2. Rakip:</label>
                            <input type="text" name="rakip" value="<?php echo guvenliCikti($duzenlenecekKayit['rakip']); ?>" required>
                            <label>Oyun:</label>
                            <input type="text" name="oyun" value="<?php echo guvenliCikti($duzenlenecekKayit['oyun']); ?>" required>
                            
                            <label>Turnuva Aşaması:</label>
                            <select name="asama">
                                <option value="Çeyrek Final" <?php if($duzenlenecekKayit['asama']=='Çeyrek Final') echo 'selected'; ?>>Çeyrek Final</option>
                                <option value="Yarı Final" <?php if($duzenlenecekKayit['asama']=='Yarı Final') echo 'selected'; ?>>Yarı Final</option>
                                <option value="Büyük Final" <?php if($duzenlenecekKayit['asama']=='Büyük Final') echo 'selected'; ?>>Büyük Final</option>
                            </select>

                            <label>Tarih:</label>
                            <input type="date" name="tarih" value="<?php echo $duzenlenecekKayit['tarih']; ?>" required>
                            <label>Durum:</label>
                            <select name="durum">
                                <option value="Bekliyor" <?php if($duzenlenecekKayit['durum']=='Bekliyor') echo 'selected'; ?>>Canlı Savaş</option>
                                <option value="İptal" <?php if($duzenlenecekKayit['durum']=='İptal') echo 'selected'; ?>>İptal Et</option>
                            </select>
                            <button type="submit" name="guncelle" class="btn-primary">Güncelle</button>
                            <a href="index.php" style="display:block; text-align:center; margin-top:10px; color:#64748b; font-size:12px; text-decoration:none;">Vazgeç</a>
                        </form>
                    <?php else: ?>
                        <h3>Yeni Maç Ekle</h3>
                        <form action="index.php" method="POST">
                            <label>1. Takım:</label>
                            <input type="text" name="oyuncu_adi" placeholder="Örn: BBL Esports" required>
                            <label>2. Rakip:</label>
                            <input type="text" name="rakip" placeholder="Örn: Fnatic" required>
                            <label>Oyun:</label>
                            <select name="oyun" required>
                                <option value="">Oyun Seçiniz...</option>
                                <option value="Valorant">Valorant</option>
                                <option value="CS2">CS2</option>
                                <option value="League of Legends">League of Legends</option>
                            </select>
                            
                            <label>Turnuva Aşaması:</label>
                            <select name="asama">
                                <option value="Çeyrek Final">Çeyrek Final</option>
                                <option value="Yarı Final">Yarı Final</option>
                                <option value="Büyük Final">Büyük Final</option>
                            </select>

                            <label>Tarih:</label>
                            <input type="date" name="tarih" required>
                            <label>Durum:</label>
                            <select name="durum">
                                <option value="Bekliyor">Canlı Savaş</option>
                                <option value="İptal">İptal Et</option>
                            </select>
                            <button type="submit" name="ekle" class="btn-primary">Maçı Ekle</button>
                        </form>
                    <?php endif; ?>

                    <h4 style="color: #64748b; margin-top: 25px; font-size: 13px;">Log Akışı</h4>
                    <div class="log-box">
                        <?php if (!empty($_SESSION['loglar'])): ?>
                            <?php foreach ($_SESSION['loglar'] as $log): ?>
                                <div>> <?php echo guvenliCikti($log); ?></div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div style="display: flex; flex-direction: column; gap: 24px;">
                    <!-- AKTİF / OYNANABİLİR MAÇLAR (8 MAÇ) -->
                    <div class="panel-card" style="margin-top: 0;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 14px;">
                            <span style="font-weight: 600; font-size: 15px;">Bu Haftanın Maçları (Bugün - 8 Maç)</span>
                            <form method="GET" action="index.php" style="margin: 0;">
                                <select name="filtre_durum" onchange="this.form.submit()" style="margin: 0; padding: 6px;">
                                    <option value="Tümü">Tümü</option>
                                    <option value="Oynandı" <?php if($secilenFiltre=='Oynandı') echo 'selected'; ?>>Oynandı</option>
                                    <option value="Bekliyor" <?php if($secilenFiltre=='Bekliyor') echo 'selected'; ?>>Bekliyor</option>
                                    <option value="İptal" <?php if($secilenFiltre=='İptal') echo 'selected'; ?>>İptal</option>
                                </select>
                            </form>
                        </div>

                        <form method="GET" action="index.php">
                            <input type="text" name="q" placeholder="Ara..." value="<?php echo guvenliCikti($aramaKelimesi); ?>">
                        </form>

                        <div class="cards-grid">
                            <?php if (count($aktifMasalar) > 0): ?>
                                <?php foreach ($aktifMasalar as $turnuva): ?>
                                    <div class="item-card">
                                        <div class="item-header">
                                            <div>
                                                <div style="font-size: 11px; color: #94a3b8; font-weight: 600;"><?php echo guvenliCikti($turnuva['asama'] ?? ''); ?></div>
                                                <strong style="color: #f8fafc;"><?php echo guvenliCikti($turnuva['oyuncu_adi'] ?? ''); ?></strong>
                                                <div class="vs-badge">VS</div>
                                                <strong style="color: #cbd5e1;"><?php echo guvenliCikti($turnuva['rakip'] ?? ''); ?></strong>
                                                <div style="color: #64748b; font-size: 12px;"><?php echo guvenliCikti($turnuva['oyun'] ?? ''); ?></div>
                                            </div>
                                            <span class="badge <?php echo strtolower($turnuva['durum'] ?? 'bekliyor'); ?>">
                                                <?php echo guvenliCikti($turnuva['durum'] ?? ''); ?>
                                            </span>
                                        </div>
                                        <div style="margin-top: 12px; font-size: 13px;">
                                            <p style="margin: 4px 0;">Skor: <strong style="color: #fff;"><?php echo guvenliCikti($turnuva['skor'] ?? '-'); ?></strong></p>
                                            <p style="margin: 4px 0; color: #cbd5e1; font-size: 12px;">Harita: <strong><?php echo guvenliCikti($turnuva['harita'] ?? ''); ?></strong></p>
                                            <p style="margin: 4px 0; color: #64748b; font-size: 12px;">Tarih: <strong><?php echo guvenliCikti($turnuva['tarih'] ?? ''); ?></strong></p>
                                        </div>
                                        <div class="item-footer">
                                            <a href="index.php?duzenle_id=<?php echo $turnuva['id']; ?>" class="btn-edit">Düzenle</a>
                                            <?php if (($turnuva['durum'] ?? '') !== 'İptal'): ?>
                                                <a href="index.php?iptal_id=<?php echo $turnuva['id']; ?>" class="btn-cancel" onclick="return confirm('İptal edilsin mi?');">İptal</a>
                                            <?php endif; ?>
                                            <a href="index.php?sil_id=<?php echo $turnuva['id']; ?>" class="btn-delete" onclick="return confirm('Silinsin mi?');">Sil</a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p style="color: #64748b; grid-column: span 2; text-align: center; padding: 20px;">Aktif maç bulunamadı.</p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- GELECEK HAFTANIN MAÇLARI (8 MAÇ - FARKLI 16 TAKIM) -->
                    <?php if (count($gelecekMasalar) > 0): ?>
                        <div class="panel-card" style="margin-top: 0; border-color: #273449;">
                            <span style="font-weight: 600; font-size: 15px; color: #94a3b8;">📅 Gelecek Haftanın Fikstürü (Farklı 8 Maç / 16 Takım)</span>
                            <div class="cards-grid">
                                <?php foreach ($gelecekMasalar as $turnuva): ?>
                                    <div class="item-card" style="opacity: 0.85; border-style: dashed;">
                                        <div class="item-header">
                                            <div>
                                                <div style="font-size: 11px; color: #64748b; font-weight: 600;"><?php echo guvenliCikti($turnuva['asama'] ?? ''); ?></div>
                                                <strong style="color: #f8fafc;"><?php echo guvenliCikti($turnuva['oyuncu_adi'] ?? ''); ?></strong>
                                                <div class="vs-badge">VS</div>
                                                <strong style="color: #cbd5e1;"><?php echo guvenliCikti($turnuva['rakip'] ?? ''); ?></strong>
                                                <div style="color: #64748b; font-size: 12px;"><?php echo guvenliCikti($turnuva['oyun'] ?? ''); ?></div>
                                            </div>
                                            <span class="badge" style="background: #1e293b; color: #64748b;">Planlandı ⏳</span>
                                        </div>
                                        <div style="margin-top: 12px; font-size: 13px;">
                                            <p style="margin: 4px 0; color: #64748b;">Durum: <strong>Bekliyor (Gelecek Hafta)</strong></p>
                                            <p style="margin: 4px 0; color: #cbd5e1; font-size: 12px;">Harita: <strong><?php echo guvenliCikti($turnuva['harita'] ?? ''); ?></strong></p>
                                            <p style="margin: 4px 0; color: #fbbf24; font-size: 12px;">Maç Tarihi: <strong><?php echo guvenliCikti($turnuva['tarih'] ?? ''); ?></strong></p>
                                        </div>
                                        <div class="item-footer">
                                            <a href="index.php?duzenle_id=<?php echo $turnuva['id']; ?>" class="btn-edit">Düzenle</a>
                                            <a href="index.php?sil_id=<?php echo $turnuva['id']; ?>" class="btn-delete" onclick="return confirm('Silinsin mi?');">Sil</a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>