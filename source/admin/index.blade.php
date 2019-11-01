<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administration</title>
    @include('_partials.cms.identity_widget')
    
    <script>
    UPLOADCARE_PUBLIC_KEY = 'e68a0e27119e69caeae0';
    UPLOADCARE_TABS = 'file url';
    UPLOADCARE_EFFECTS = 'crop,rotate,mirror,flip,enhance,sharp,blur,grayscale,invert';
    UPLOADCARE_IMAGES_ONLY = true;
    UPLOADCARE_PREVIEW_STEP = true;
    </script>

    <script src="https://ucarecdn.com/libs/widget/3.x/uploadcare.full.min.js"></script>
    <script src="https://ucarecdn.com/libs/widget-tab-effects/1.x/uploadcare.tab-effects.js"></script>

    <script>
    uploadcare.registerTab('preview', uploadcareTabEffects)
    </script>
</head>
<body>
    <script src="https://unpkg.com/netlify-cms@2.1.1/dist/netlify-cms.js"></script>
</body>
</html>
