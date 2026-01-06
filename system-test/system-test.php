<?php
// system-test.php
// Whitebox Testing: Exception Handling Path untuk REST Client NewsAPI.org

echo "Running Test Case: WB_API_001 - Invalid API Key Test...\n";

try {
    // Simulasi error dari NewsAPI (contohnya API key salah)
    throw new Exception("Gagal mengambil data dari API");
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    $expectedMessage = "Invalid API key";

    // Validasi hasil uji (apakah error sesuai dengan yang diharapkan)
    if ($errorMessage === $expectedMessage) {
        echo "|  PASS: Error tertangkap dan pesan sesuai.\n";
        echo "Pesan error yang diterima: " . $errorMessage . "\n";
    } else {
        echo "|  FAIL: Error tidak tertangkap atau pesan tidak sesuai.\n";
        echo "Pesan error yang diterima: " . $errorMessage . "\n";
    }
}
?>
