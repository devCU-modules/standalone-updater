<style>
    .about-markdown h1 {
        font-size:16px;
    }
    .about-markdown p {
        font-size:13px;
    }
    .about-markdown ul {
        list-style-position: inside;
    }
    .about-new-version-block {
        width:100%;
        padding-left:40px;
        padding-top:100px;
        padding-bottom:100px;
        background:#4592ff;
        color:#fff;
        margin-bottom: 20px;
    }
    .about-new-version-block h1 {
        font-size:38px;
    }
    .about-new-version-block h3 {
        font-size:20px;
    }
</style>
<div class="container p-5">

    <div class="about-new-version-block">
        <h1>Microweber {{MW_VERSION}}</h1>
        <h3>Drag and drop website builder.</h3>
    </div>

    <div class="about-markdown">
        {!! $about !!}
    </div>
</div>