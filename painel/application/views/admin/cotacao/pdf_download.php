<?php

$html = "
<html>
<body>
<section>
		<table border=\"\" style=\"font-size:10pt;\">
			<tbody>
				<tr>
					<td width=\"60%\"><h3>Cotação em Dólar Americano (USD)</h3></td>
				</tr>
			</tbody>
		</table>

    <table border=\"\" style=\"font-size:10pt; border: 1px solid black; border-collapse: collapse;\">
			<thead>
				<tr>
					<th style=\"background-color: #f2f2f2; border: 1px solid black; border-collapse: collapse;\">Serviço</th>
          <th style=\"background-color: #f2f2f2; border: 1px solid black; border-collapse: collapse;\">CEP Destino</th>
          <th style=\"background-color: #f2f2f2; border: 1px solid black; border-collapse: collapse;\">Cidade Destino</th>
          <th style=\"background-color: #f2f2f2; border: 1px solid black; border-collapse: collapse;\">País Destino</th>
          <th style=\"background-color: #f2f2f2; border: 1px solid black; border-collapse: collapse;\">Valor Declarado</th>
          <th style=\"background-color: #f2f2f2; border: 1px solid black; border-collapse: collapse;\">Vol</th>
          <th style=\"background-color: #f2f2f2; border: 1px solid black; border-collapse: collapse;\">Peso</th>
          <th style=\"background-color: #f2f2f2; border: 1px solid black; border-collapse: collapse;\">Peso Dimen</th>
          <th style=\"background-color: #f2f2f2; border: 1px solid black; border-collapse: collapse;\">Valor Bruto</th>
          <th style=\"background-color: #f2f2f2; border: 1px solid black; border-collapse: collapse;\">Liq (USD)</th>
				</tr>
      </thead>
      <tbody>
          <tr>
            <td style=\"background-color: #f2f2f2; border: 1px solid black; border-collapse: collapse;\">Frete</td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\">". $cotacao['d_zip']."</td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\">". $cotacao['d_city']."</td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\">". $cotacao['d_country']."</td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\">". $cotacao['preco']."</td>
          </tr>
          <tr>
            <td style=\"background-color: #f2f2f2; border: 1px solid black; border-collapse: collapse;\">Seguro</td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\">". $cotacao['seguro']."</td>
          </tr>
          <tr>
            <td style=\"background-color: #f2f2f2; border: 1px solid black; border-collapse: collapse;\">FD</td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
          </tr>
          <tr>
            <td style=\"background-color: #f2f2f2; border: 1px solid black; border-collapse: collapse;\">DU-E</td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
          </tr>
          <tr>
            <td style=\"background-color: #f2f2f2; border: 1px solid black; border-collapse: collapse;\">Tx Resid</td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
          </tr>
          <tr>
            <td style=\"background-color: #f2f2f2; border: 1px solid black; border-collapse: collapse;\">Area Est.</td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
          </tr>
          <tr>
            <td style=\"background-color: #f2f2f2; border: 1px solid black; border-collapse: collapse;\">Desconto</td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\">". $cotacao['desconto']."</td>
          </tr>
          <tr>
            <td style=\"background-color: #f2f2f2; border: 1px solid black; border-collapse: collapse;\">Dim Excd</td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
          </tr>
          <tr>
            <td style=\"background-color: #f2f2f2; border: 1px solid black; border-collapse: collapse;\">Total</td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\">". $cotacao['preco']."</td>
          </tr>
			</tbody>
		</table>

    <p>&nbsp;</p>

    <table border=\"\" style=\"font-size:10pt; border: 1px solid black; border-collapse: collapse;\">
			<thead>
				<tr>
					<th style=\"background-color: #f2f2f2; border: 1px solid black; border-collapse: collapse;\">Peso</th>
          <th style=\"background-color: #f2f2f2; border: 1px solid black; border-collapse: collapse;\">Peso DIM</th>
          <th style=\"background-color: #f2f2f2; border: 1px solid black; border-collapse: collapse;\">Largura</th>
          <th style=\"background-color: #f2f2f2; border: 1px solid black; border-collapse: collapse;\">Altura</th>
          <th style=\"background-color: #f2f2f2; border: 1px solid black; border-collapse: collapse;\">Comprimento</th>
				</tr>
      </thead>
      <tbody>
          <tr>
            <td style=\"border: 1px solid black; border-collapse: collapse;\">&nbsp;".$cotacao['weight']."</td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\"></td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\">".$cotacao['width']."</td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\">".$cotacao['height']."</td>
            <td style=\"border: 1px solid black; border-collapse: collapse;\">".$cotacao['length']."</td>
          </tr>
      </tbody>
    </table>
  </section>

<h3> Cotação para Frete Pago no Brasil </h3>

<i style=\"font-size:9pt;\"> O Valor da cotação está sujeito a variações de acordo com a proposta assinada junto a área comercial. Qualquer dúvida favor entrar em contato com executivo de contas. Os pacotes serão pesados e medidos novamente se caso o peso/medida seja alterado, o frete sofrerá alteração SEM AVISO PRÉVIO. Taxas e impostos que porventura venham a incidir, por determinação da autoridade alfandegária, serão cobrados do destinatário ou do remetente, sendo o pagamento dos mesmos à vista.</i>

<p style=\"font-size:9pt;\"> 1)	Transporte: Todas as remessas transportadas pela UPS estão sujeitas aos termos e condições constantes no conhecimento de transporte aéreo internacional, sem prejuízo de outras regras estipuladas pela UPS ou pela legislação aplicável em vigor, de tempos em tempos.
<p style=\"font-size:9pt;\"> 2)	Ad Valorem: Taxa a ser cobrada pela UPS: US$0,95 para cada US$100,00 ou fração do valor total declarado com uma taxa mínima de US$2,90. Ou seja, em um envio com valor declarado de US$350,00, a UPS cobrará US$3,85 (US$0,95 + US$2,90). Para um envio com valor declarado de US$475,00, a UPS cobrará US$4,80 (US$1,90 + US$2,90), e assim sucessivamente. O valor máximo declarado e a máxima responsabilidade legal da UPS é de U$ 50.000,00 por envio e 30.000,00 em Moeda Nacional.
<p style=\"font-size:9pt;\"> 3)	Condições de pagamento e faturamento: Os serviços serão faturados e convertidos em Reais com base na taxa de venda do dólar norte- americano (taxa comercial do dia útil anterior) para pagamento e faturamento a Spring Logistic Transporte Ltda. Sem prejuízo da aplicação de multas e correção monetária, o não pagamento das faturas nos prazos estabelecidos poderá acarretar a suspensão temporária ou definitiva dos serviços prestados pela UPS do Brasil através da Spring Logistic Transporte Ltda. bem como o direito de retenção das remessas ainda não entregues. A Nefi Comercio internacional e agenciamentos se reserva o direito de modificar os prazos de faturamento e vencimento das faturas mediante prévio aviso.
<p style=\"font-size:9pt;\"> 4)	Serviço garantido: Esta suspenso em função da pandemia SARS COVID-19
<p style=\"font-size:9pt;\"> 5)	Material de uso: A UPS fornecerá ao Exportador, sem custos adicionais, os seguintes materiais necessários para seus envios: UPS Express Envelope, UPS Express Pak (envelope plástico), UPS HardPack, UPS Pad Pack, UPS Express Box, UPS Express Tube (tubo para posters), 10Kg ou 25Kg Express Box.
<p style=\"font-size:9pt;\"> 6)	Softwares de rastreamento: Durante a vigência desta proposta, a UPS disponibilizará, gratuitamente, software para impressão de AWB, rastreamento e impressão de relatórios. A UPS determina que os envios devem ser processados eletronicamente, ou seja, geração dos conhecimentos aéreos através dos sistemas oferecidos.
<p style=\"font-size:9pt;\"> 7)	Validade: Esta cotação é válida até o final da semana que foi solicitante e foi elaborada com base nas informações sobre volume informado. Em caso de desconto, para a afirmação dos mesmos, é necessário que o cliente confirme o envio com o responsável na UPS pela cotação para que a proposta de serviços UPS seja enviada para assinatura. Sem a proposta assinada não temos como cadastrar os descontos em nossos sistemas e a cobrança de frete será enviada com o valor bruto (sem o desconto). É de responsabilidade do cliente a confirmação do desconto.
<p style=\"font-size:9pt;\"> 8)	Taxa extra de combustível: A UPS utiliza sobretaxas baseadas em índices que são atualizados semanalmente. As alterações nas sobretaxas entrarão em vigor na segunda-feira de cada semana.
<p style=\"font-size:9pt;\">https://www.ups.com/content/br/pt/shipping/cost/zones/fuel_surcharge.html?srch_pos=1&srch_phr=fuel Para mais informações.
<p style=\"font-size:9pt;\"> 9)	Taxas adicionais: A UPS se reserva o direito de aplicar a cobrança das taxas adicionais contidas em nossa Tabela de Tarifas e Zonas.
<p style=\"font-size:9pt;\"> 10)	Confidencialidade: Os termos e condições ora ajustados devem ser mantidos sob sigilo e não podem ser revelados a terceiros.
<p style=\"font-size:9pt;\"> 11)	Contas da UPS: Os descontos citados nesta cotação, serão aplicados somente para as contas determinadas na proposta de serviço. Estes descontos são intransferíveis e não podem ser utilizados para a revenda de nossos serviços. A inclusão e exclusão de contas devem ser solicitadas por escrito, e confirmadas mediante assinatura de nova proposta.
<p style=\"font-size:9pt;\"> 12)	Termos e Condições de Serviço: Os termos e condições de Serviço encontrados em sua última versão em nosso site www.ups.com/br fazem parte integrante deste acordo.
<p style=\"font-size:9pt;\"> 13)	Força Maior: A UPS se reserva o direito de não executar os serviços contratados nos casos de força maior e caso fortuito, porém sem constituir limitação, tais como, greves, incidentes da natureza, guerras, determinações governamentais e etc.
<p style=\"font-size:9pt;\"> 14)	Tarifas Validas para semana que foi solicitado dos dias de segunda a sexta

</body>
</html>
";


$filename = 'cotacao-'.$cotacao['id'].'.pdf';

$mpdf = new \Mpdf\Mpdf();

$mpdf->SetDisplayMode('fullpage');

$mpdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list

// LOAD a stylesheet
$stylesheet = file_get_contents(base_url('assets/dist/css/mpdfstyletables.css'));
$mpdf->WriteHTML($stylesheet,1);	// The parameter 1 tells that this is css/style only and no body/html/text

$mpdf->WriteHTML($html,2);

ob_clean();
$mpdf->Output($filename.'.pdf','D');
exit;

?>