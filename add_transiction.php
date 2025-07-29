<?php
include 'assets/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category_id = $_POST['category_id'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $note = $_POST['note'];

    $stmt = $conn->prepare("INSERT INTO transactions (category_id, amount, date, note) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("idss", $category_id, $amount, $date, $note);
    $stmt->execute();

    header("Location: index.php");
    exit;
}
?>
<form method="post">
    <select name="category_id">
        <?php
        $categories = $conn->query("SELECT * FROM categories");
        while($row = $categories->fetch_assoc()) {
            echo "<option value='{$row['id']}'>{$row['name']}</option>";
        }
        ?>
    </select>
    <input type="number" step="0.01" name="amount" required>
    <input type="date" name="date" required>
    <textarea name="note"></textarea>
    <button type="submit">Aggiungi</button>
</form>

<div>
    Prezzo Bitcoin: <span id="btc-price">Caricamento...</span> €<br>
    Valore del tuo BTC (0,00745987): <span id="btc-total">Caricamento...</span> €
</div>

<script>
const myBTC = 0.00745987;

async function getBTCPrice() {
    try {
        let response = await fetch("https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=eur");
        let data = await response.json();
        let price = data.bitcoin.eur;
        
        // Mostra prezzo BTC
        document.getElementById('btc-price').innerText = price.toLocaleString('it-IT', {minimumFractionDigits: 2});

        // Calcola valore del tuo BTC
        let total = price * myBTC;
        document.getElementById('btc-total').innerText = total.toLocaleString('it-IT', {minimumFractionDigits: 2});
    } catch (error) {
        document.getElementById('btc-price').innerText = "Errore";
        document.getElementById('btc-total').innerText = "Errore";
    }
}

// Aggiorna ogni 60 secondi
getBTCPrice();
setInterval(getBTCPrice, 60000);
</script>
