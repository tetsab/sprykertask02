import './social-media.scss';
import register from 'ShopUi/app/registry';

export default register(
    'social-media',
    () =>
        import(
            './social-media'
        ),
);
