#  Via Cep 

# instalar

``` 
$ composer require davidsonts/viacep
``` 

use Davidsonts\ViaCep\ViaCep;

print_r(ViaCep::pegarEnderecoPorCep(91790072));

print_r(ViaCep::pegarEnderecoPorUfLocalidadeLogradouro('SP', 'São Paulo', 'Rua'));