CREATE DATABASE financas;

USE financas;

CREATE TABLE tb_categoriasDespesas(
    id_categoriaDespesa INT AUTO_INCREMENT PRIMARY KEY,
    categoriaDespesa VARCHAR(60)
);

CREATE TABLE tb_categoriasReceitas(
    id_categoriaReceita INT AUTO_INCREMENT PRIMARY KEY,
    categoriaReceita VARCHAR(60)
);

CREATE TABLE tb_despesas(
    id_despesa INT AUTO_INCREMENT PRIMARY KEY,
    nome_gasto VARCHAR(60),
    valor FLOAT,
    id_categoriaDespesa INT,
    FOREIGN KEY (id_categoriaDespesa) REFERENCES tb_categoriasDespesas(id_categoriaDespesa)
);

CREATE TABLE tb_receitas(
    id_receita INT AUTO_INCREMENT PRIMARY KEY,
    nome_receita VARCHAR(60),
    valor FLOAT,
    id_categoriaReceita INT,
    FOREIGN KEY (id_categoriaReceita) REFERENCES tb_categoriasReceitas(id_categoriaReceita)
);

INSERT INTO tb_categoriasDespesas(categoriaDespesa) VALUES 
    ('Alimentação'), ('Moradia'), ('Transporte'), ('Educação'), ('Saúde'), ('Lazer'), ('Dividas ou financiamento');

INSERT INTO tb_categoriasReceitas(categoriaReceita) VALUES
    ('Salário'), ('Investimento'), ('Venda'), ('Receita Extra');