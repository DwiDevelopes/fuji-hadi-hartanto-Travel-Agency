CREATE TABLE messages (
    ->     id INT AUTO_INCREMENT PRIMARY KEY,
    ->     name VARCHAR(100) NOT NULL,
    ->     email VARCHAR(100) NOT NULL,
    ->     subject VARCHAR(200) NOT NULL,
    ->     message TEXT NOT NULL,
    ->     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    -> );

    CREATE TABLE reservations (
    ->     id INT AUTO_INCREMENT PRIMARY KEY,
    ->     guest_name VARCHAR(100) NOT NULL,
    ->     guest_email VARCHAR(100) NOT NULL,
    ->     check_in_date DATE NOT NULL,
    ->     check_out_date DATE NOT NULL,
    ->     room_type VARCHAR(50) NOT NULL,
    ->     guests INT NOT NULL,
    ->     payment_method VARCHAR(50) NOT NULL,
    ->     notes TEXT,
    ->     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    -> );

    CREATE TABLE date_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    departure_date DATE NOT NULL,
    return_date DATE NOT NULL,
    submitted_at DATETIME NOT NULL
);

CREATE TABLE tour_bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    travel_date DATE NOT NULL,
    destination_id INT NOT NULL,
    destination_name VARCHAR(100) NOT NULL,
    people INT NOT NULL,
    duration INT NOT NULL,
    package VARCHAR(50) NOT NULL,
    special_requests TEXT,
    ip_address VARCHAR(45),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Optional: Create destinations table if you want to manage them dynamically
CREATE TABLE destinations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    is_active BOOLEAN DEFAULT TRUE
);

-- Insert sample destinations
INSERT INTO destinations (name) VALUES 
('Bali, Indonesia'),
('Phuket, Thailand'),
('Santorini, Greece'),
('Paris, France'),
('Kyoto, Japan');