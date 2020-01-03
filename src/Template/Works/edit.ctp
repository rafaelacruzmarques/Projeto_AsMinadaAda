<section id="about" class="parallax section" style="background-color: #000">
    <div class="wrapsection">
        <div class="parallax-overlay" style="background-color: #01b0d1;opacity:0.9; color: #000;"></div>
        <div class="container">
            <div class="row">
                <h1 style="color: #ffffff; text-align: center;">Adicionar Vaga de Emprego</h1>
                <?php
                echo $this->Form->create($work, ['class' => 'form-evento datepicker']);
                echo $this->Form->input('company', [
                    'label' => 'Empresa',
                    'class' => 'form-control input-md'
                ]);
                echo $this->Form->input('address', [
                    'label' => 'Endereço da Empresa',
                    'class' => 'form-control input-md'
                ]);

                echo $this->Form->input('contact', [
                    'label' => 'Contato',
                    'class' => 'form-control input-md'
                ]);
                echo $this->Form->input('job', [
                    'label' => 'Vaga',
                    'class' => 'form-control input-md'
                ]);
                echo $this->Form->input('jobs', [
                    'label' => 'Número de vagas',
                    'class' => 'form-control input-md'
                ]);



                echo $this->Form->input('description', [
                    'label' => 'Descrição da Vaga',
                    'class' => 'form-control input-md'
                ]);
                echo $this->Form->button(__('Salvar vaga'), ['class' => 'btn btn-primary']);
                echo $this->Form->end();
                ?>

            </div>
        </div>
    </div>
</section>