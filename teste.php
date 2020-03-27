<?php
$this->load->model("cursos_model");
$cursos = $this->cursos_model->index();





// ADM E NEGOCIOS
$query = "UPDATE `cursos` SET `area` = 'Administração e Negócios' WHERE `cursos`.`titulo` = 'Direito Administrativo' or
`cursos`.`titulo` = 'Direito Administrativo'
`cursos`.`titulo` ='Supervisão Escolar e Gestão de Projetos' or
`cursos`.`titulo` ='Supervisão e Administração Escolar' or
`cursos`.`titulo` ='Administração Escolar e Orientação Educacional' or
`cursos`.`titulo` ='Administração e Inspeção Escolar' or
`cursos`.`titulo` ='MBA em Gestão Bancária' or
`cursos`.`titulo` ='MBA em Gestão Competitiva no Varejo' or
`cursos`.`titulo` ='MBA de Gestão em Petróleo e Gás' or
`cursos`.`titulo` ='MBA em Gestão Profissional de Condomínios' or
`cursos`.`titulo` ='MBA em Gestão Pública' or
`cursos`.`titulo` ='MBA em Meio Ambiente e Organizações Empresariais e Sociais' or
`cursos`.`titulo` ='Gestão Educacional e Inspeção Escolar' or
`cursos`.`titulo` ='MBA em Administração, Finanças e Negócios' or
`cursos`.`titulo` ='MBA em Gestão Administrativa e Marketing' or
`cursos`.`titulo` ='MBA em Gestão Estratégica, Inovação e Conhecimento' or
`cursos`.`titulo` ='Tecnologia em Gestão Comercial (Cruzeiro do Sul)' or
`cursos`.`titulo` ='Administração Escolar, Supervisão e Orientação' or
`cursos`.`titulo` ='Administração (Bacharelado)' or
`cursos`.`titulo` ='Ciências Contábeis (Bacharelado)' or
`cursos`.`titulo` ='MBA em Gestão de Negócios NOVO' or
`cursos`.`titulo` ='MBA em Empreendedorismo, Marketing e Finanças' or
`cursos`.`titulo` ='MBA em Gestão Estratégica da Produção e Manutenção' or
`cursos`.`titulo` ='Administração Aplicada em Gestão Empresarial' or
`cursos`.`titulo` ='MBA em Gestão de Pessoas' or
`cursos`.`titulo` ='MBA em Gestão de Negócios com ênfase em finanças' or
`cursos`.`titulo` ='MBA em Gestão de Logística e Cadeia de Suprimentos' or
`cursos`.`titulo` ='MBA em Gestão da Qualidade' or
`cursos`.`titulo` ='MBA em Gestão Ambiental com ênfase em Auditoria e Perícia' or
`cursos`.`titulo` ='MBA em Gestão de Projetos' or
`cursos`.`titulo` ='MBA Executivo em Gestão Estratégica e Econômica de Negócios' or
`cursos`.`titulo` ='MBA em Empreendedorismo e Gestão de Novos Negócios'  or
`cursos`.`titulo` ='MBA em Gestão Empreendedora'  or
`cursos`.`titulo` ='MBA em Psicologia nas Organizações' or
`cursos`.`titulo` ='MBA em Administração Estratégica' or
`cursos`.`titulo` ='MBA em Administração Financeira'  or
`cursos`.`titulo` ='MBA em Empreendedorismo e Desenvolvimento de Novos Negócios' or
`cursos`.`titulo` ='MBA em Gestão de Negócios, Inovação e Empreendedorismo'  or
`cursos`.`titulo` ='MBA em Gestão de Operações e da Produção Industrial'  or
`cursos`.`titulo` ='MBA em Gestão Empresarial'  or
`cursos`.`titulo` ='MBA em Inteligência de Mercado' or
`cursos`.`titulo` ='MBA em Planejamento Estratégico de Marketing no Varejo' or
`cursos`.`titulo` ='MBA em Gestão Operacional e Logística'  or
`cursos`.`titulo` ='MBA em Comércio Exterior' or
`cursos`.`titulo` ='MBA em Gestão do Varejo'  or
`cursos`.`titulo` ='MBA em Negociação e Vendas'  or
`cursos`.`titulo` ='MBA em Gestão e Liderança de Equipes' or
`cursos`.`titulo` ='MBA em Gestão de Logística e Cadeia de Valor'  or
`cursos`.`titulo` ='MBA em Comunicação Empresarial e Institucional'  or
`cursos`.`titulo` ='MBA em Comportamento Organizacional e Gestão de Pessoas' or
`cursos`.`titulo` ='MBA em Gestão em Administração Financeira e Orçamentária'  or
`cursos`.`titulo` ='MBA em Gestão Estratégica de Negócios'  or
`cursos`.`titulo` ='MBA em Finanças Corporativas e Mercado Financeiro'  or
`cursos`.`titulo` ='MBA em Gestão de Riscos Corporativos' or
`cursos`.`titulo` ='MBA em Gestão de Recursos Humanos' or
`cursos`.`titulo` ='MBA em Comércio Exterior com ênfase em Importação' or
`cursos`.`titulo` ='MBA em Comércio Exterior com ênfase em Exportação' or
`cursos`.`titulo` ='MBA em Desenvolvimento Humano em Gestão de Projetos' or
`cursos`.`titulo` ='MBA em Gestão de Custos e Planejamento Estratégico' or
`cursos`.`titulo` ='MBA em Gestão Estratégica de Compras' or
`cursos`.`titulo` ='MBA Gestão Estratégica de Pessoas e Psicologia Organizacional' or
`cursos`.`titulo` ='MBA em Gestão da Produção' or
`cursos`.`titulo` ='MBA em Gestão Estratégica de Vendas' or
`cursos`.`titulo` ='MBA em Gestão da Qualidade e Produtividade' or
`cursos`.`titulo` ='MBA em Relacionamento Interpessoal' or
`cursos`.`titulo` ='MBA em Negócios Internacionais e Comércio Exterior' or
`cursos`.`titulo` ='MBA em Gestão Estratégica de Pessoas' or
`cursos`.`titulo` ='MBA em Relações Internacionais' or
`cursos`.`titulo` ='MBA em Gestão da Tecnologia da Informação' or
`cursos`.`titulo` ='MBA em Gestão Estratégica de Pessoas: Desenvolvimento Humano de Gestores' or
`cursos`.`titulo` ='MBA em Gestão Financeira' or
`cursos`.`titulo` ='MBA em Marketing Digital e Negócios Interativos' or
`cursos`.`titulo` ='MBA em Contabilidade, Auditoria e Perícia' or
`cursos`.`titulo` ='MBA em Gestão Estratégica de Marketing' or
`cursos`.`titulo` ='MBA em Gestão de Pessoas e Educação Corporativa' or
`cursos`.`titulo` ='MBA em Gestão da Produção e Logística' or
`cursos`.`titulo` ='Educação Especial e Gestão de Processos Inclusivos' or
`cursos`.`titulo` ='Pedagogia Empresarial e Educação Corporativa' or
`cursos`.`titulo` ='Pedagogia Empresarial' or
`cursos`.`titulo` ='MBA em Liderança nas Organizações' or
`cursos`.`titulo` ='MBA de Gestão em Administração e Marketing';";




// Educação
$qeury2 = "UPDATE `cursos` SET `area` = 'Educação' WHERE `cursos`.`titulo` = 'Docência do Ensino Superior' or
`cursos`.`titulo` = 'Docência do Ensino Superior e Inspeção Escolar' or
`cursos`.`titulo` = 'Docência na Educação Infantil e Anos Iniciais' or
`cursos`.`titulo` = 'Alfabetização e Letramento' or
`cursos`.`titulo` = 'Arte e Educação' or
`cursos`.`titulo` = 'Atendimento Educacional Especializado' or
`cursos`.`titulo` = 'Coordenação Pedagógica e Planejamento' or
`cursos`.`titulo` = 'Coordenação Pedagógica e Supervisão Escolar' or
`cursos`.`titulo` = 'Educação Ambiental e Sustentabilidade' or
`cursos`.`titulo` = 'Educação Infantil' or
`cursos`.`titulo` = 'Educação Infantil, Neurociência e Aprendizagem' or
`cursos`.`titulo` = 'Informática e Comunicação na Educação' or
`cursos`.`titulo` = 'Inspeção Escolar e Orientação Educacional' or
`cursos`.`titulo` = 'Inspeção Escolar e Práticas de Supervisão' or
`cursos`.`titulo` = 'Inspeção Escolar e Supervisão Pedagógica' or
`cursos`.`titulo` = 'Psicopedagogia Institucional' or
`cursos`.`titulo` = 'Psicopedagogia e Educação Especial' or
`cursos`.`titulo` = 'Libras' or
`cursos`.`titulo` = 'Tutoria em Educação a Distância' or
`cursos`.`titulo` = 'Ludopedagogia e Educação Infantil' or
`cursos`.`titulo` = 'Matemática Financeira e Estatística' or
`cursos`.`titulo` = 'Supervisão, Inspeção e Orientação Educacional' or
`cursos`.`titulo` = 'Supervisão Escolar e Orientação Educacional' or
`cursos`.`titulo` = 'Supervisão Escolar e Gestão de Projetos' or
`cursos`.`titulo` = 'Supervisão e Administração Escolar' or
`cursos`.`titulo` = 'Educação Especial Inclusiva' or
`cursos`.`titulo` = 'Gestão Escolar Integrada e Práticas Pedagógicas' or
`cursos`.`titulo` = 'Gestão Ambiental e Práticas Pedagógicas' or
`cursos`.`titulo` = 'Administração Escolar e Planejamento' or
`cursos`.`titulo` = 'Administração Escolar e Orientação Educacional' or
`cursos`.`titulo` = 'Administração e Inspeção Escolar' or
`cursos`.`titulo` = 'Transtornos Globais do Desenvolvimento e Comunicação Alternativa' or
`cursos`.`titulo` = 'Educação Infantil, Especial e Transtornos Globais' or
`cursos`.`titulo` = 'Educação Inclusiva, Especial e Políticas de Inclusão' or
`cursos`.`titulo` = 'Educação Infantil e Psicomotricidade Clínica' or
`cursos`.`titulo` = 'Gestão Educacional e Educação Infantil' or
`cursos`.`titulo` = 'Gestão Educacional e Inspeção Escolar' or
`cursos`.`titulo` = 'Psicopedagogia e Supervisão Escolar' or
`cursos`.`titulo` = 'Educação em Saúde' or
`cursos`.`titulo` = 'Atuação Profissional Inclusiva' or
`cursos`.`titulo` = 'Administração Escolar, Supervisão e Orientação ' or
`cursos`.`titulo` = 'Orientação Educacional e Práticas de Supervisão' or
`cursos`.`titulo` = 'Educação Infantil de 0 a 6 anos' or
`cursos`.`titulo` = 'Educação Especial Inclusiva - ênfase em Tec. Assistiva e Comunicação Alternativa' or
`cursos`.`titulo` = 'Psicopedagogia Institucional e Clínica' or
`cursos`.`titulo` = 'Educação Musical' or
`cursos`.`titulo` = 'Educação Especial com ênfase em Deficiência Intelectual' or
`cursos`.`titulo` = 'Educação Especial Inclusiva 800h' or
`cursos`.`titulo` = 'Pedagogia (Licenciatura)' or
`cursos`.`titulo` = 'Pedagogia para Licenciados (2ª Licenciatura) - (6 meses)' or
`cursos`.`titulo` = 'Formação Pedagógica para Graduados (1ª Licenciatura) - Pedagogia (6 meses)' or
`cursos`.`titulo` = 'Educação Infantil - Anos Iniciais e Psicopedagogia' or
`cursos`.`titulo` = 'Metodologia do Ensino da Matemática' or
`cursos`.`titulo` = 'Metodologia do Ensino da Língua Portuguesa' or
`cursos`.`titulo` = 'Planejamento Educacional' or
`cursos`.`titulo` = 'Metodologia do Ensino da Literatura Portuguesa e Brasileira' or
`cursos`.`titulo` = 'Metodologia do Ensino da Língua Portuguesa, Literatura Brasileira e Portuguesa' or
`cursos`.`titulo` = 'Educação a Distância' or
`cursos`.`titulo` = 'O Ensino de Libras na Educação Infantil' or
`cursos`.`titulo` = 'Educação de Jovens e Adultos (EJA)' or
`cursos`.`titulo` = 'Metodologia do Ensino da História com ênfase em História Antiga' or
`cursos`.`titulo` = 'Metodologia do Ensino da História com ênfase em História Medieval' or
`cursos`.`titulo` = 'Metodologia do Ensino da História com ênfase em História Moderna' or
`cursos`.`titulo` = 'Metodologia do Ensino da Geografia' or
`cursos`.`titulo` = 'Psicologia da Educaçã' or
`cursos`.`titulo` = 'Metodologia do Ensino da História e da Geografia' or
`cursos`.`titulo` = 'Metodologia do Ensino da Linguística' or
`cursos`.`titulo` = 'Atendimento Educacional Especializado com ênfase em Autismo' or
`cursos`.`titulo` = 'Educação Especial e Inclusiva com ênfase em Deficiência Motora e Paralisia Cerebral' or
`cursos`.`titulo` = 'Metodologia no Ensino das Artes com Ênfase na Educação Básica' or
`cursos`.`titulo` = 'História e Cultura no Brasil' or
`cursos`.`titulo` = 'Linguística e Formação de Leitores' or
`cursos`.`titulo` = 'Metodologia do Ensino da Literatura Africana e Indígena' or
`cursos`.`titulo` = 'Inovação em Tecnologias Educacionais' or
`cursos`.`titulo` = 'Educação, Ludicidade e Desenvolvimento Infantil' or
`cursos`.`titulo` = 'História da Arte' or
`cursos`.`titulo` = 'Literatura Infantojuvenil' or
`cursos`.`titulo` = 'Educação Especial com ênfase em Comunicação' or
`cursos`.`titulo` = 'Educação Especial Inclusiva: Ênfase em Autismo' or
`cursos`.`titulo` = 'Metodologia e Prática em Educação Infantil' or
`cursos`.`titulo` = 'Psicanálise dos Contos de Fadas' or
`cursos`.`titulo` = 'Pedagogia Social e Gestão de Projetos Sociais' or
`cursos`.`titulo` = 'Docência da Educação Ambiental para a Cidadania e Sustentabilidade' or
`cursos`.`titulo` = 'Informática Educativa' or
`cursos`.`titulo` = 'Gestão Escolar Integrada com ênfase em administração, supervisão, orientação e inspeção escolar' or
`cursos`.`titulo` = 'Educação Especial e Inclusiva com ênfase em Paralisia Cerebral' or
`cursos`.`titulo` = 'Gestão Competitiva no Varejo com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão de Petróleo e Gás com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão Pública com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Meio Ambiente e Organizações Empresariais e Sociais com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Administração, Finanças e Negócios com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão Administrativa e Marketing com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão Estratégica, Inovação e Conhecimento com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Empreendedorismo, Marketing e Finanças com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão Estratégica da Produção e Manutenção com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Administração Aplicada a Gestão Empresarial com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão de Pessoas com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão de Negócios com Ênfase em Finanças e Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão de Logística e Cadeia de Suprimentos com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão de Qualidade e Produtividade com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão Ambiental com Ênfase em Auditoria e Perícia e Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão de Projetos com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão Estratégica e Econômica de Negócios com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Empreendedorismo e Gestão de Novos Negócios com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão Empreendedora com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Psicologia nas Organizações com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Administração Estratégica com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Administração Financeira com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Empreendedorismo e Desenvolvimento de Novos Negócios com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão de Negócios, Inovação e Empreendedorismo com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão de Operações, Produtos e Serviços com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão Empresarial com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Inteligência de Mercado com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Planejamento Estratégico de Marketing no Varejo com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão Operacional e Logística com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Comércio Exterior com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Negociação em Vendas com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão e Liderança de Equipes com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão de Logística e Cadeia de Valor com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Comunicação Empresarial e Institucional com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Comportamento Organizacional e Gestão de Pessoas com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão em Administração Financeira e Orçamentária com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão Estratégica de Negócios com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Finanças Corporativas e Mercado Financeiro com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão de Riscos Corporativos com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão de Recursos Humanos com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Comércio Exterior com Ênfase em Importação e Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Comércio Exterior com Ênfase em Exportação e Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Desenvolvimento Humano em Gestão de Projetos com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão de Custos e Planejamento Estratégico com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão Estratégica de Compras com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão Estratégica de Pessoas e Psicologia Organizacional com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão da Produção com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão Estratégica de Pessoas com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Relações Internacionais com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão Estratégica de Pessoas: Desenvolvimento Humano de Gestores com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão Financeira com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Marketing Digital e Negócios Interativos com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Contabilidade, Auditoria e Perícia com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Marketing Estratégico com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão de Pessoas e Educação Corporativa com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão da Produção e Logística com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Pedagogia Empresarial e Educação Corporativa com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Liderança nas Organizações com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão em Administração e Marketing com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Engenharia Civil com Ênfase em Tecnologia da Construção e Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Engenharia da Qualidade com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Engenharia de Produção com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Engenharia de Suprimentos com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Engenharia Elétrica: Sistemas de Potência com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Engenharia e Gerenciamento de Manutenção com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Engenharia Ambiental com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Engenharia Elétrica com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Engenharia de Segurança Contra Incêndio e Pânico com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Engenharia de Produção com ênfase em Gestão e Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Enfermagem do Trabalho e Saúde Ocupacional com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão em Saúde da Família com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Saúde Coletiva e Comunitária com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Saúde Pública com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Higiene Laboral com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Assistência Social e Saúde Pública com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Inteligência Policial com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Políticas de Segurança Pública com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Direito Ambiental com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Direito do Trabalho com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Direito Previdenciário com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Direito Processual Penal com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Direito Tributário com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Direito Processual Civil com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Direito Eleitoral com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Direito Constitucional com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Direito Público com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Direito do Consumidor com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Direito Empresarial com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão Ambiental com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Negócios Internacionais e Comércio Exterior com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Relacionamento Interpessoal com Habilitação em Docência no Ensino Superior' or
`cursos`.`titulo` = 'Gestão Estratégica de Vendas com Habilitação em Docência no Ensino Superior';";


// Engenharia
$query3 = "UPDATE `cursos` SET `area` = 'Engenharia' WHERE `cursos`.`titulo` = 'Engenharia de Segurança do Trabalho ' or
`cursos`.`titulo` = 'Engenharia da Qualidade' or
`cursos`.`titulo` = 'Engenharia de Produção' or
`cursos`.`titulo` = 'Engenharia de Suprimentos' or
`cursos`.`titulo` = 'Engenharia Elétrica: Sistemas de Potência' or
`cursos`.`titulo` = 'Engenharia Metalúrgica com Ênfase em Fundição' or
`cursos`.`titulo` = 'Engenharia e Gerenciamento de Manutenção' or
`cursos`.`titulo` = 'Engenharia Ambiental' or
`cursos`.`titulo` = 'Engenharia Elétrica' or
`cursos`.`titulo` = 'Engenharia de Segurança Contra Incêndio e Pânico' or
`cursos`.`titulo` = 'Engenharia de Produção com Ênfase em Gerenciamento de Projetos' or
`cursos`.`titulo` = 'Segurança do Trabalho com ênfase em ergonomia' or
`cursos`.`titulo` = 'Engenharia de Produção com ênfase em Gestão';";

//saude

$query4 = "UPDATE `cursos` SET `area` = 'Saúde' WHERE`cursos`.`titulo` = 'Farmárcia Clínica e Serviços Farmacêuticos' or
`cursos`.`titulo` = 'Enfermagem do Trabalho e Saúde Ocupacional' or
`cursos`.`titulo` = 'Saúde do Trabalhador' or
`cursos`.`titulo` = 'Comportamento Social e Saúde' or
`cursos`.`titulo` = 'Gestão em Saúde da Família' or
`cursos`.`titulo` = 'Humanização na Atenção à Saúde' or
`cursos`.`titulo` = 'Programas de Saúde' or
`cursos`.`titulo` = 'Saúde Coletiva e Comunitária' or
`cursos`.`titulo` = 'Saúde Pública' or
`cursos`.`titulo` = 'Educação em Saúde' or
`cursos`.`titulo` = 'Atuação Profissional Inclusiva' or
`cursos`.`titulo` = 'Higiene Laboral' or
`cursos`.`titulo` = 'Gestão em Saúde (MBA)' or
`cursos`.`titulo` = 'Especialização em Ergonomia' or
`cursos`.`titulo` = 'Assistência Social e Saúde Pública';";

// Psicopedagogia

$query5 = "UPDATE `cursos` SET `area` = 'Psicopedagogia' WHERE`cursos`.`titulo` = 'Psicopedagogia Institucional' or
`cursos`.`titulo` = 'Psicopedagogia e Educação Especial' or
`cursos`.`titulo` = 'Gestão Escolar Integrada e Práticas Pedagógicas' or
`cursos`.`titulo` = 'Gestão Ambiental e Práticas Pedagógicas' or
`cursos`.`titulo` = 'Psicopedagogia e Supervisão Escolar' or
`cursos`.`titulo` = 'Psicopedagogia Institucional e Clínica' or
`cursos`.`titulo` = 'Psicologia e Desenvolvimento da Aprendizagem';";

// Segurança do Trabalho

$query6 = "UPDATE `cursos` SET `area` = 'Segurança do trabalho' WHERE `cursos`.`titulo` = 'Segurança do Trabalho, Prevenção e Controle de Riscos' or
`cursos`.`titulo` = 'Enfermagem do Trabalho e Saúde Ocupacional' or
`cursos`.`titulo` = 'Engenharia de Segurança do Trabalho ' or
`cursos`.`titulo` = 'Saúde do Trabalhador' or
`cursos`.`titulo` = 'Gestão de Segurança Privada';";

// Comunicação e Marketing

$query7 = "UPDATE `cursos` SET `area` = 'Comunicação e Marketing' WHERE `cursos`.`titulo` = 'MBA em Gestão Administrativa e Marketing' or
`cursos`.`titulo` = 'Gestão Estratégica de Marketing (MBA)';";

// Direito

$query8 = "UPDATE `cursos` SET `area` = 'Direito' WHERE`cursos`.`titulo` = 'Direito Administrativo' or
`cursos`.`titulo` = 'Direito Ambiental' or
`cursos`.`titulo` = 'Direito do Trabalho' or
`cursos`.`titulo` = 'Direito Previdenciário' or
`cursos`.`titulo` = 'Direito Processual Penal' or
`cursos`.`titulo` = 'Direito Tributário' or
`cursos`.`titulo` = 'Direito Processual Civil' or
`cursos`.`titulo` = 'Direito Eleitoral' or
`cursos`.`titulo` = 'Direito Constitucional' or
`cursos`.`titulo` = 'Direito Público' or
`cursos`.`titulo` = 'Direito do Consumidor' or
`cursos`.`titulo` = 'Direito Empresarial' or
`cursos`.`titulo` = 'Direito Administrativo com Habilitação em Docência no Ensino Superior';";

//Finanças e Contabilidade
$query9 = "UPDATE `cursos` SET `area` = 'Finanças e Contabilidade' WHERE `cursos`.`titulo` = 'Matemática Financeira e Estatística' or
`cursos`.`titulo` = 'MBA em Gestão Bancária' or
`cursos`.`titulo` = 'MBA em Gestão Competitiva no Varejo' or
`cursos`.`titulo` = 'MBA em Gestão Profissional de Condomínios' or
`cursos`.`titulo` = 'Finanças e Estatística (MBA)';";

// Educação Musical
$query10 = "UPDATE `cursos` SET `area` = 'Educação Musical' WHERE `cursos`.`titulo` = 'Educação Musical' or
`cursos`.`titulo` = 'Iniciação a um Instrumento' or
`cursos`.`titulo` = 'Música na Saúde' or
`cursos`.`titulo` = 'O Ensino da Música e Seus Desafios' or
`cursos`.`titulo` = 'Dança' or
`cursos`.`titulo` = 'Teatro' or
`cursos`.`titulo` = 'Musicalização';";

//Meio Ambiente
$query11 = "UPDATE `cursos` SET `area` = 'Meio Ambiente' WHERE `cursos`.`titulo` = 'Perícia e Auditoria Ambiental' or
`cursos`.`titulo` = 'Educação Ambiental e Sustentabilidade' or
`cursos`.`titulo` = 'Gestão Ambiental e Práticas Pedagógicas' or
`cursos`.`titulo` = 'MBA em Meio Ambiente e Organizações Empresariais e Sociais' or
`cursos`.`titulo` = 'MBA em Gestão Ambiental';";

// Segurança Pública

$query12 = "UPDATE `cursos` SET `area` = 'Segurança Pública' WHERE `cursos`.`titulo` = 'Políticas de Segurança Pública' or
`cursos`.`titulo` = 'Inteligência Policial';";
