document.getElementById('reservationForm').addEventListener('submit', function(e) {
    let isValid = true;
    
    // Validasi Nama
    const guestName = document.getElementById('guestName').value;
    if (guestName.trim() === '') {
        document.getElementById('guestNameError').style.display = 'block';
        isValid = false;
    } else {
        document.getElementById('guestNameError').style.display = 'none';
    }
    
    // Validasi Email
    const email = document.getElementById('guestEmail').value;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        document.getElementById('guestEmailError').style.display = 'block';
        isValid = false;
    } else {
        document.getElementById('guestEmailError').style.display = 'none';
    }
    
    // Validasi Tanggal
    const checkInDate = new Date(document.getElementById('checkInDate').value);
    const checkOutDate = new Date(document.getElementById('checkOutDate').value);
    if (checkInDate >= checkOutDate) {
        alert('Tanggal check-out harus setelah tanggal check-in');
        isValid = false;
    }
    
    if (!isValid) {
        e.preventDefault();
    }
});