<link rel="styleheet" href="<?=base_url('assets/dropzone.css')?>" >

<script src="<?=base_url('assets/dropzone.js')?>" ></script>

<style>
body {
    background: rgb(243, 244, 245);
    height: 100%;
    color: rgb(100, 108, 127);
    line-height: 1.4rem;
    font-family: Roboto, "Open Sans", sans-serif;
    font-size: 20px;
    font-weight: 300;
    text-rendering: optimizeLegibility;
}

.content {
    background: white;
    border-radius: 5px;
    border: 2px dashed rgb(0, 135, 247);
    border-image: none;
    max-width: 500px;
	max-width: 500px;
    margin-left: auto;
    margin-right: auto;
}
</style>


<div class="content">
<form action="<?=base_url('upload/fileupload')?>" class="dropzone" id="fileupload">
	<div class="dz-message needsclick"  > Drop files here or click to upload.</div>
</form>
</div>

<script>
	Dropzone.options.fileupload = {
		acceptFiles:"image/*",
		maxFilesize:1
	}
</script>
