function appendToDisplay(value) {
    document.getElementById('display').value += value;
}

function clearDisplay() {
    document.getElementById('display').value = '';
}

function calculateResult() {
    var expression = document.getElementById('display').value;

    try {
        var result = eval(expression);

        if (!Number.isFinite(result) || isNaN(result)) {
            throw new Error('Invalid result');
        }

        document.getElementById('display').value = result;
    } catch (error) {
        if (error instanceof Error && error.message.includes('division by zero')) {
            document.getElementById('display').value = 'Error: Division by zero';
        } else {
            console.error(error);
            document.getElementById('display').value = 'Error';
        }
    }
  
}

function deleteLastCharacter() {
    var currentExpression = document.getElementById('display').value;
    document.getElementById('display').value = currentExpression.slice(0, -1);
}

function handleKeyPress(event) {
    var key = event.key;
    // Tangani input keyboard sesuai dengan tombol yang ditekan
    switch (key) {
        case 'Enter':
            calculateResult();
            break;
        case 'Backspace':
            deleteLastCharacter();
            break;
        default:
            // Tangani angka, operator, atau karakter lain
            if (/[0-9+\-*/.]/.test(key)) {
                appendToDisplay(key);
            }
    }
}

// Tambahkan event listener untuk mendengarkan peristiwa keyboard
document.addEventListener('keydown', handleKeyPress);