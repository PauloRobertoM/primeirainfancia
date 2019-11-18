<?php get_header(); ?>

    <section class="titulo-interno">
        <h1>Atividades</h1>
        <ul>
            <li><a href="">hOME</a></li>
            <li><a href="">CONTATO</a></li>
        </ul>
    </section><!-- titulo-interno -->

    <section class="interna turmas atividades">
        <div class="container">
            <div class="row">
            	<div class="col-md-6 col-sm-6">
            		<form action="">
            			<div class="form-group">
            				<label for="nome">Nome</label>
            				<input type="text" name="nome" class="form-control">
            			</div><!-- form-group -->
            			<div class="form-group">
            				<label for="email">Email</label>
            				<input type="email" name="email" class="form-control">
            			</div><!-- form-group -->
            			<div class="form-group">
            				<label for="telefone">Telefone</label>
            				<input type="text" name="telefone" class="form-control" placeholder="Nome">
            			</div><!-- form-group -->
            			<div class="form-group">
            				<label for="assunto">Assunto</label>
            				<select name="assunto" id="assunto" class="form-control">
            					<option value="">Matrícula</option>
            					<option value="">Matrícula</option>
            					<option value="">Matrícula</option>
            				</select>
            			</div><!-- form-group -->
            			<div class="form-group">
            				<label for="mensagem">Mensagem</label>
            				<textarea name="mensagem" id="" cols="30" rows="10" class="form-control"></textarea>
            			</div><!-- form-group -->
            		</form>
            	</div><!-- md-6 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- interna -->

<?php get_footer(); ?>