<br>-- Alumno: Roldan Hernández Mauricio.
<br>-- No. de Control: 21TE0139.
<br>
<br>create database encuentratucuarto;
<br>
<br>use encuentratucuarto;
<br>
<br>
<br>create table profiles(
<br>id tinyint not null auto_increment,
<br>profile varchar(20) not null unique,
<br>description varchar(100),
<br>status boolean default true,
<br>created_at datetime,
<br>updated_at datetime null,
<br>deleted_at datetime null,
<br>primary key(id)
<br>);
<br>
<br>
<br>create table users(
<br>id int not null auto_increment,
<br>username varchar(50) unique,
<br>password varchar(150),
<br>status boolean,
<br>profile tinyint not null,
<br>index(profile),
<br>created_at datetime,
<br>updated_at datetime null,
<br>deleted_at datetime null,
<br>foreign key(profile) references profiles(id),
<br>primary key(id)
<br>);
<br>
<br>
<br>create table userinfo(
<br>id int not null,
<br>name varchar(50),
<br>lastname varchar(80),
<br>birthday date null,
<br>account_number varchar(20) null,
<br>bank_name varchar(50) null,
<br>account_type varchar(20) null,
<br>account_holder varchar(50) null,
<br>cvv int(3) null,
<br>month_c int(2) null,
<br>year_c int(2) null,
<br>gender char,
<br>phone varchar(15) null,
<br>photo varchar(250) null,
<br>bio text null,
<br>RFC varchar(255) null,
<br>email varchar(255) null,
<br>status boolean default true,
<br>created_at datetime,
<br>updated_at datetime null,
<br>deleted_at datetime null,
<br>constraint id_usuario foreign key(id) references users(id),
<br>primary key(id)
<br>);
<br>
<br>
<br>create table apartments(
<br>id int not null auto_increment,
<br>rooms varchar(2) not null,
<br>bathrooms varchar(2) not null,
<br>floor_p varchar(2) not null,
<br>tenant int not null,
<br>image varchar(250) null,
<br>created_at datetime,
<br>updated_at datetime null,
<br>deleted_at datetime null,
<br>foreign key(tenant) references users(id),
<br>primary key(id)
<br>);
<br>
<br>
<br>create table services(
<br>id int not null auto_increment,
<br>category varchar(50) not null,
<br>description text null,
<br>created_at datetime,
<br>updated_at datetime null,
<br>deleted_at datetime null,
<br>status boolean default true,
<br>primary key(id)
<br>);
<br>
<br>
<br>create table extraservices(
<br>id int not null auto_increment,
<br>name varchar(100) not null,
<br>typese int not null,
<br>owner varchar(100) not null,
<br>phone varchar(15) not null,
<br>street varchar(100) not null,
<br>neighborhood varchar(100) not null,
<br>hours varchar(100) not null,
<br>price varchar(50) not null,
<br>created_at datetime,
<br>updated_at datetime null,
<br>deleted_at datetime null,
<br>foreign key(typese) references services(id),
<br>primary key(id)
<br>);
<br>
<br>
<br>create table units(
<br>id int not null auto_increment,
<br>street varchar(100) not null,
<br>neighborhood varchar(100) not null,
<br>extra_services int not null,
<br>apartment int not null,
<br>floors varchar(2) not null,
<br>locality varchar(100) not null,
<br>created_at datetime,
<br>updated_at datetime null,
<br>deleted_at datetime null,
<br>foreign key(apartment) references apartments(id),
<br>foreign key(extra_services) references extraservices(id),
<br>primary key(id)
<br>);
<br>
<br>
<br>create table areas(
<br>id int not null auto_increment,
<br>unit int not null,
<br>created_at datetime,
<br>updated_at datetime null,
<br>deleted_at datetime null,
<br>foreign key(unit) references units(id),
<br>primary key(id)
<br>);
<br>
<br>
<br>
<br>
<br>INSERT INTO profiles (profile, description, status, created_at)
<br>VALUES
<br>('admin', 'Perfil de administrador', true, '2023-05-15 10:00:00'),
<br>('arrendatario', 'Perfil de arrendatario', true, '2023-08-20 11:15:00');
<br>
<br>
<br>INSERT INTO users (username, password, status, profile, created_at)
<br>VALUES
<br>('MariaGomez23', 'P@ssw0rd1', true, 1, '2023-04-15 09:30:00'),
<br>('JuanPerez85', 'SecurePass123', true, 2, '2023-07-22 14:15:00'),
<br>('LuisaRodriguez', 'StrongP@ssw0rd', true, 1, '2023-02-10 11:45:00'),
<br>('CarlosSanchez', 'SecretPass789', false, 2, '2023-09-30 17:20:00'),
<br>('AnaLopez', 'AnaPass2023', true, 1, '2023-01-05 08:00:00');
<br>
<br>
<br>INSERT INTO userinfo (id, name, lastname, birthday, account_number, bank_name, account_type, account_holder, cvv, month_c, year_c, gender, phone, photo, bio, RFC, email, status, created_at)
<br>VALUES
<br>(1, 'Maria', 'Gomez', '1990-03-20', '1234567890', 'BankA', 'Savings', 'Maria Gomez', 123, 04, 25, 'F', '555-123-4567', 'maria.jpg', 'Soy una persona amigable', 'MAR123456789', 'maria@example.com', true, '2023-04-15 09:30:00'),
<br>(2, 'Juan', 'Perez', '1985-07-10', '9876543210', 'BankB', 'Checking', 'Juan Perez', 456, 07, 24, 'M', '555-987-6543', 'juan.jpg', 'Me gusta la música y los deportes', 'JUA987654321', 'juan@example.com', true, '2023-07-22 14:15:00'),
<br>(3, 'Luisa', 'Rodriguez', '1980-02-03', '5555555555', 'BankC', 'Savings', 'Luisa Rodriguez', 789, 02, 21, 'F', '555-555-5555', 'luisa.jpg', 'Amante de la naturaleza', 'LUI555555555', 'luisa@example.com', true, '2023-02-10 11:45:00'),
<br>(4, 'Carlos', 'Sanchez', '1995-09-15', '1111222233334444', 'BankD', 'Credit', 'Carlos Sanchez', 321, 09, 28, 'M', '555-777-8888', 'carlos.jpg', 'Apasionado por la tecnología', 'CAR111122223', 'carlos@example.com', false, '2023-09-30 17:20:00'),
<br>(5, 'Ana', 'Lopez', '1988-01-05', '4444333322221111', 'BankE', 'Checking', 'Ana Lopez', 654, 01, 23, 'F', '555-999-0000', 'ana.jpg', 'Me encanta cocinar y viajar', 'ANA4444333322', 'ana@example.com', true, '2023-01-05 08:00:00');
<br>
<br>
<br>INSERT INTO apartments (rooms, bathrooms, floor_p, tenant, image, created_at)
<br>VALUES
<br>('2', '1', '3', 1, 'apartment1.jpg', '2023-04-15 09:30:00'),
<br>('3', '2', '2', 2, 'apartment2.jpg', '2023-07-22 14:15:00'),
<br>('1', '1', '1', 3, 'apartment3.jpg', '2023-02-10 11:45:00'),
<br>('2', '2', '4', 4, 'apartment4.jpg', '2023-09-30 17:20:00'),
<br>('4', '2', '6', 5, 'apartment5.jpg', '2023-01-05 08:00:00'),
<br>('1', '1', '5', 1, 'apartment6.jpg', '2023-03-10 15:45:00'),
<br>('3', '1', '2', 2, 'apartment7.jpg', '2023-05-20 12:30:00'),
<br>('2', '1', '8', 3, 'apartment8.jpg', '2023-08-25 10:15:00'),
<br>('4', '3', '1', 4, 'apartment9.jpg', '2023-02-16 17:45:00'),
<br>('2', '1', '7', 5, 'apartment10.jpg', '2023-06-10 08:30:00');
<br>
<br>
<br>INSERT INTO services (category, description, created_at)
<br>VALUES
<br>('Lavandería', 'Servicio de lavandería para tu comodidad.', '2023-04-15 09:30:00'),
<br>('Supermercado', 'Supermercado con una amplia selección de productos.', '2023-07-22 14:15:00'),
<br>('Restaurante', 'Restaurante con platos deliciosos y variados.', '2023-02-10 11:45:00'),
<br>('Gimnasio', 'Gimnasio con entrenadores profesionales.', '2023-09-30 17:20:00'),
<br>('Farmacia', 'Farmacia con medicamentos y productos de salud.', '2023-01-05 08:00:00'),
<br>('Cafetería', 'Cafetería con café y postres artesanales.', '2023-03-10 15:45:00'),
<br>('Tintorería', 'Tintorería para el cuidado de tu ropa.', '2023-05-20 12:30:00'),
<br>('Centro de Salud', 'Centro de salud con atención médica y urgencias.', '2023-08-25 10:15:00'),
<br>('Parque Recreativo', 'Parque con áreas verdes y entretenimiento.', '2023-02-16 17:45:00'),
<br>('Biblioteca', 'Biblioteca con una amplia colección de libros.', '2023-06-10 08:30:00');
<br>
<br>
<br>INSERT INTO extraservices (name, typese, owner, phone, street, neighborhood, hours, price, created_at)
<br>VALUES
<br>('Lavandería "Lavado Limpio"', 1, 'María García', '555-123-4567', 'Calle Limpieza #123', 'Colonia Lavado', '9:00 AM - 7:00 PM', '$7 por carga', '2023-04-15 09:30:00'),
<br>('Supermercado "La Tienda Fresca"', 2, 'Juan Rodríguez', '555-987-6543', 'Avenida Abasto #456', 'Barrio Compras', '8:00 AM - 9:00 PM', 'Varía por producto', '2023-07-22 14:15:00'),
<br>('Restaurante "Sabor Auténtico"', 3, 'Ana López', '555-555-5555', 'Calle Delicias #789', 'Zona Gastronómica', '11:00 AM - 10:00 PM', '$15 por plato', '2023-02-10 11:45:00'),
<br>('Gimnasio "Entrenamiento Pro"', 4, 'Luis Pérez', '555-777-8888', 'Avenida Deporte #321', 'Barrio Deportivo', '6:00 AM - 9:00 PM', '$40 por mes', '2023-09-30 17:20:00'),
<br>('Farmacia "Salud al Instante"', 5, 'Laura Martínez', '555-111-2222', 'Calle Remedios #654', 'Colonia Salud', '8:00 AM - 8:00 PM', 'Varía por producto', '2023-01-05 08:00:00'),
<br>('Cafetería "Café Aromático"', 6, 'Carlos Sánchez', '555-222-3333', 'Calle Café #987', 'Zona Cafeterías', '7:00 AM - 6:00 PM', '$3 por café', '2023-03-10 15:45:00'),
<br>('Tintorería "Ropa Impecable"', 7, 'Andrea Fernández', '555-333-4444', 'Avenida Limpia #111', 'Barrio de la Ropa', '10:00 AM - 7:00 PM', '$12 por prenda', '2023-05-20 12:30:00'),
<br>('Centro de Salud "Vitalidad Médica"', 8, 'Daniel Ramírez', '555-444-5555', 'Calle de la Salud #444', 'Zona de Salud', '8:00 AM - 5:00 PM', 'Varía por consulta', '2023-08-25 10:15:00'),
<br>('Parque Recreativo "Diversión al Aire Libre"', 9, 'Carmen González', '555-999-0000', 'Avenida Recreación #777', 'Colonia Diversión', '7:00 AM - 8:00 PM', 'Gratis', '2023-02-16 17:45:00'),
<br>('Biblioteca "Lecturas enriquecedoras"', 10, 'Jorge Herrera', '555-666-7777', 'Calle de los Libros #333', 'Zona de Lectura', '9:00 AM - 6:00 PM', 'Gratis', '2023-06-10 08:30:00');
<br>
<br>
<br>INSERT INTO units (street, neighborhood, extra_services, apartment, floors, locality, created_at)
<br>VALUES
<br>('Calle San Miguel #123', 'Colonia Centro', 1, 1, '2', 'Ciudad Central', '2023-04-15 09:30:00'),
<br>('Avenida Independencia #456', 'Barrio Comercial', 2, 2, '3', 'Ciudad Compras', '2023-07-22 14:15:00'),
<br>('Calle de la Rosa #789', 'Zona Residencial', 3, 3, '1', 'Ciudad Residencia', '2023-02-10 11:45:00'),
<br>('Avenida de los Pájaros #321', 'Barrio Natural', 4, 4, '4', 'Ciudad Naturaleza', '2023-09-30 17:20:00'),
<br>('Calle del Sol #654', 'Colonia Solar', 5, 5, '2', 'Ciudad Solar', '2023-01-05 08:00:00'),
<br>('Calle Luna #987', 'Barrio Lunar', 1, 1, '5', 'Ciudad Lunar', '2023-03-10 15:45:00'),
<br>('Avenida de los Ángeles #111', 'Zona Celestial', 2, 2, '6', 'Ciudad Celestial', '2023-05-20 12:30:00'),
<br>('Calle de las Montañas #444', 'Colonia Montañosa', 3, 3, '1', 'Ciudad Montaña', '2023-08-25 10:15:00'),
<br>('Avenida del Mar #777', 'Barrio Marítimo', 4, 4, '3', 'Ciudad Mar', '2023-02-16 17:45:00'),
<br>('Calle del Bosque #333', 'Zona Boscosa', 5, 5, '2', 'Ciudad Bosque', '2023-06-10 08:30:00');
<br>
<br>
<br>INSERT INTO areas (unit, created_at)
<br>VALUES
<br>(1, '2023-04-15 09:30:00'),
<br>(3, '2023-07-22 14:15:00'),
<br>(7, '2023-02-10 11:45:00'),
<br>(2, '2023-09-30 17:20:00'),
<br>(9, '2023-01-05 08:00:00');