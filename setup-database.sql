-- ============================================================
-- Urbie — Setup do Banco de Dados
-- Execute como root: mysql -u root -p < setup-database.sql
-- ============================================================

-- Criar banco de dados
CREATE DATABASE IF NOT EXISTS urbie
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

-- Criar usuário urbie (ajuste a senha abaixo!)
CREATE USER IF NOT EXISTS 'urbie'@'localhost' IDENTIFIED BY 'urbie_senha_2026!';
CREATE USER IF NOT EXISTS 'urbie'@'%' IDENTIFIED BY 'urbie_senha_2026!';

-- Dar permissões ao usuário
GRANT ALL PRIVILEGES ON urbie.* TO 'urbie'@'localhost';
GRANT ALL PRIVILEGES ON urbie.* TO 'urbie'@'%';

FLUSH PRIVILEGES;

-- Confirmar
SELECT 'Banco de dados urbie criado com sucesso!' AS status;
SHOW DATABASES LIKE 'urbie';
SELECT User, Host FROM mysql.user WHERE User = 'urbie';
