-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS taskpro_db;

-- Selecionar o banco de dados
USE taskpro_db;

-- Criação da tabela tasks
CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    status ENUM('Pendente', 'Em Progresso', 'Concluída') DEFAULT 'Pendente',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Inserir dados iniciais (opcional)
INSERT INTO tasks (title, description, status) VALUES
('Tarefa Exemplo 1', 'Descrição da tarefa exemplo 1', 'Pendente'),
('Tarefa Exemplo 2', 'Descrição da tarefa exemplo 2', 'Em Progresso');
