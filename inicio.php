<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Carros</title>
    </head>
    <body>
        <div>
            <form action="fim.php" method="POST">
                <label>Digite o valor do carro:</label>
                <input type="text" name="valor" id="valor" required>
                <select> 
                    <option value="1" name="selecao"> à vista</option>
                    <option value="2" name="selecao"> parcelado</option>
                </select>
                <select> 
                    <option value="6" name="selecao"> 6</option>
                    <option value="12" name="selecao"> 12</option>
                    <option value="3" name="selecao"> parcelado</option>
                    <option value="4" name="selecao"> parcelado</option>
                    <option value="5" name="selecao"> parcelado</option>
                    <option value="6" name="selecao"> parcelado</option>
                    <option value="7" name="selecao"> parcelado</option>
                    <option value="8" name="selecao"> parcelado</option>
                    <option value="9" name="selecao"> parcelado</option>
                    <option value="10" name="selecao"> parcelado</option>
                </select>
                <input type="submit" value="calcular">
            </form>
        </div>
    </body>
</html>