-- Desafio 1
-- Sua empresa está fazendo um levantamento de quantos clientes estão cadastrados nos estados, porém, faltou levantar os dados do estado do Rio Grande do Sul.
-- Então você deve Exibir o nome de todos os clientes cujo estado seja ‘RS’.

select (name) from customers where state = 'RS';

-- Desafio 2
-- O seu trabalho é nos passar os nomes e os endereços dos clientes que moram em 'Porto Alegre'

SELECT (name, street) from customers where city = 'Porto Alegre';
