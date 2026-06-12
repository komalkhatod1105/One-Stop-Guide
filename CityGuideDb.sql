CREATE DATABASE IF NOT EXISTS CityGuideDB;
USE CityGuideDB;

DROP TABLE IF EXISTS city_data;

CREATE TABLE city_data (
  id INT AUTO_INCREMENT PRIMARY KEY,
  city_name VARCHAR(50),
  place_name VARCHAR(100),
  place_type VARCHAR(50),
  description TEXT,
  INDEX idx_city (city_name),
  INDEX idx_place_type (place_type)
);

-- Ajmer
INSERT INTO city_data (city_name, place_name, place_type, description) VALUES
('Ajmer', 'Ajmer Sharif Dargah', 'Place', 'A famous Sufi shrine.'),
('Ajmer', 'Ana Sagar Lake', 'Place', 'Scenic artificial lake.'),
('Ajmer', 'JLN Hospital', 'Hospital', 'Major hospital in Ajmer.'),
('Ajmer', 'Mayo College', 'College', 'One of India\'s ' oldest public schools.'),
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

-- Laxmangarh
INSERT INTO city_data (city_name, place_name, place_type, description) VALUES
  ('Laxmangarh', 'Laxmangarh Fort',      'Place',    'Historical fort situated atop a hill.'),
  ('Laxmangarh', 'CHC Laxmangarh',        'Hospital', 'Community Health Center serving the town.'),
  ('Laxmangarh', 'Mody University',       'College',  'Premier women''s university with a large campus.'),
  ('Laxmangarh', 'Tagore Public School',  'School',   'English medium co-ed school.'),
  ('Laxmangarh', 'The Brew Villa Café',   'Cafe',     'Trendy student-friendly café near university.');

  -- Burdwan (Bardhaman)
INSERT INTO city_data (state_name, city_name, place_name, place_type, description) VALUES
('West Bengal', 'Burdwan', '108 Shiva Temple', 'Place', 'Historic temple complex with 108 shrines.'),
('West Bengal', 'Burdwan', 'Burdwan Medical College', 'Hospital', 'Major government medical hospital.'),
('West Bengal', 'Burdwan', 'University of Burdwan', 'College', 'Renowned state university.'),
('West Bengal', 'Burdwan', 'St. Xavier''s School', 'School', 'Prestigious English medium school.'),
('West Bengal', 'Burdwan', 'Cafe Royal', 'Cafe', 'Popular youth café in city center.');

-- Kolkata
INSERT INTO city_data (state_name, city_name, place_name, place_type, description) VALUES
('West Bengal', 'Kolkata', 'Victoria Memorial', 'Place', 'Iconic marble museum and garden.'),
('West Bengal', 'Kolkata', 'Apollo Gleneagles Hospital', 'Hospital', 'Famous multi-speciality hospital.'),
('West Bengal', 'Kolkata', 'Jadavpur University', 'College', 'Leading university in India.'),
('West Bengal', 'Kolkata', 'La Martiniere School', 'School', 'Historic and elite private school.'),
('West Bengal', 'Kolkata', 'Flurys', 'Cafe', 'Legendary tearoom and bakery.');

-- Aligarh
INSERT INTO city_data (state_name, city_name, place_name, place_type, description) VALUES
('Uttar Pradesh', 'Aligarh', 'Aligarh Fort', 'Place', 'Historic fort built in the 16th century.'),
('Uttar Pradesh', 'Aligarh', 'JNMCH Hospital', 'Hospital', 'Jawaharlal Nehru Medical College Hospital.'),
('Uttar Pradesh', 'Aligarh', 'Aligarh Muslim University', 'College', 'World-famous central university.'),
('Uttar Pradesh', 'Aligarh', 'Our Lady of Fatima School', 'School', 'Reputed convent school.'),
('Uttar Pradesh', 'Aligarh', 'Cafe Coffee Day', 'Cafe', 'Youth hangout near AMU.');

-- Pune
INSERT INTO city_data (state_name, city_name, place_name, place_type, description) VALUES
('Maharashtra', 'Pune', 'Shaniwar Wada', 'Place', 'Historic fort palace built in 1732.'),
('Maharashtra', 'Pune', 'Ruby Hall Clinic', 'Hospital', 'Well-known multi-speciality hospital.'),
('Maharashtra', 'Pune', 'Savitribai Phule Pune University', 'College', 'One of India''s premier universities.'),
('Maharashtra', 'Pune', 'St. Mary''s School', 'School', 'Prestigious English medium school.'),
('Maharashtra', 'Pune', 'Vaishali Restaurant', 'Cafe', 'Iconic café popular with students and professionals.');

-- Jaipur
INSERT INTO city_data (state_name, city_name, place_name, place_type, description) VALUES
('Rajasthan', 'Jaipur', 'Hawa Mahal', 'Place', 'Iconic pink sandstone palace with 953 windows.'),
('Rajasthan', 'Jaipur', 'SMS Hospital', 'Hospital', 'Sawai Man Singh Hospital, largest government hospital in Rajasthan.'),
('Rajasthan', 'Jaipur', 'University of Rajasthan', 'College', 'Oldest and prominent university in Jaipur.'),
('Rajasthan', 'Jaipur', 'Maharani Gayatri Devi Girls'' School', 'School', 'Renowned all-girls school with rich history.'),
('Rajasthan', 'Jaipur', 'Tapri Central', 'Cafe', 'Trendy café famous for tea and snacks with rooftop view.');


SELECT * FROM city_data;

SELECT * FROM city_data
WHERE city_name = 'Jaipur';

SELECT * FROM city_data
WHERE place_name LIKE '%Fort%';

-- Sample query: Get all cafes in Kolkata
SELECT place_name, description
FROM city_data
WHERE city_name = 'Kolkata' AND place_type = 'Cafe';

