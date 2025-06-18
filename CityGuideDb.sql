CREATE DATABASE IF NOT EXISTS CityGuideDB;
USE CityGuideDB;

DROP TABLE IF EXISTS city_data;

CREATE TABLE city_data (
  id INT AUTO_INCREMENT PRIMARY KEY,
  city_name VARCHAR(50),
  place_name VARCHAR(100),
  place_type VARCHAR(50),
  description TEXT
);

-- Ajmer
INSERT INTO city_data (city_name, place_name, place_type, description) VALUES
('Ajmer', 'Ajmer Sharif Dargah', 'Place', 'A famous Sufi shrine.'),
('Ajmer', 'Ana Sagar Lake', 'Place', 'Scenic artificial lake.'),
('Ajmer', 'JLN Hospital', 'Hospital', 'Major hospital in Ajmer.'),
('Ajmer', 'Mayo College', 'College', 'One of India\'s oldest public schools.'),
('Ajmer', 'Coffee Day', 'Cafe', 'Popular café for youth.');

-- Kota
INSERT INTO city_data (city_name, place_name, place_type, description) VALUES
('Kota', 'Seven Wonders Park', 'Place', 'Miniature replicas of world wonders.'),
('Kota', 'Allen Career Institute', 'College', 'Top coaching institute.'),
('Kota', 'NMCH Hospital', 'Hospital', 'Large general hospital.'),
('Kota', 'Raj Ratan Restaurant', 'Restaurant', 'Well-known eatery in Kota.'),
('Kota', 'The Chocolate Room', 'Cafe', 'Modern café in Gumanpura.');

-- Delhi
INSERT INTO city_data (city_name, place_name, place_type, description) VALUES
('Delhi', 'India Gate', 'Place', 'War memorial and popular spot.'),
('Delhi', 'AIIMS', 'Hospital', 'Premier medical institute.'),
('Delhi', 'Delhi University', 'College', 'Leading university in India.'),
('Delhi', 'Modern School', 'School', 'Top-ranked private school.'),
('Delhi', 'Cafe Coffee Day', 'Cafe', 'Common youth hangout.');

-- Fatehpur
INSERT INTO city_data (city_name, place_name, place_type, description) VALUES
('Fatehpur', 'Government Hospital', 'Hospital', 'Central hospital in Fatehpur.'),
('Fatehpur', 'Fatehpur Fort', 'Place', 'Historical monument.'),
('Fatehpur', 'Govt. College', 'College', 'Key college for higher education.'),
('Fatehpur', 'Saraswati School', 'School', 'Local public school.'),
('Fatehpur', 'Red Chilli Café', 'Cafe', 'Small café near market.');

-- Sikar
INSERT INTO city_data (city_name, place_name, place_type, description) VALUES
('Sikar', 'Khatushyam Mandir', 'Place', 'Devotional site for Lord Krishna.'),
('Sikar', 'Medanta Hospital', 'Hospital', 'Private multi-speciality hospital.'),
('Sikar', 'Shekhawati College', 'College', 'Famous private college.'),
('Sikar', 'St. Xavier School', 'School', 'English medium school.'),
('Sikar', 'Royal Café', 'Cafe', 'Youth café with WiFi.');

-- Ratangarh
INSERT INTO city_data (city_name, place_name, place_type, description) VALUES
('Ratangarh', 'Ratangarh Fort', 'Place', 'Old royal palace.'),
('Ratangarh', 'CHC Hospital', 'Hospital', 'Community health center.'),
('Ratangarh', 'Government PG College', 'College', 'Well-known local college.'),
('Ratangarh', 'Kendriya Vidyalaya', 'School', 'CBSE school under central govt.'),
('Ratangarh', 'Bite Café', 'Cafe', 'New hangout spot in main market.');

-- Kishangarh
INSERT INTO city_data (city_name, place_name, place_type, description) VALUES
('Kishangarh', 'Marble Market', 'Place', 'Famous for marble exports.'),
('Kishangarh', 'RK Hospital', 'Hospital', 'Key hospital in the town.'),
('Kishangarh', 'JLN College', 'College', 'Oldest college in city.'),
('Kishangarh', 'ABC Public School', 'School', 'Popular private school.'),
('Kishangarh', 'KGC Café', 'Cafe', 'Stylish café for students.');
