<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductLabel;
use App\Models\ProductCollection;
use App\Models\ProductAttribute;
use App\Models\ProductSpecificationGroup;
use App\Models\ProductSpecificationValue;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function () {

            DB::table('products')->insert([
                [
                    'id' => 2,
                    'code' => '#P00G1',
                    'name' => json_encode(['tr' => 'Gloas', 'en' => 'Gloas']),
                    'slug' => json_encode(['tr' => 'gloas', 'en' => 'gloas']),
                    'description' => json_encode(['tr' => 'Beyaz Koyu Damarlı Kuvars Tezgah', 'en' => 'White Dark Veined Quartz Countertop']),
                    'content' => json_encode([
                        'tr' => '<p>En saf tonlardan oluşan zamansız beyaz bir taban, karanlık ve ışığın etkileşimiyle yumuşak gölgelerin hareketiyle dokunuyor.</p>',
                        'en' => '<p>A timeless white base composed of the purest tones is woven with the movement of soft shadows through the interplay of darkness and light.</p>']),
                    'created_at' => now(),
                    'updated_at' => now(),

                ],
            ]);

            $product = Product::find(2);
            $product->addMedia(public_path('assets/image/photo/15.webp'))->preservingOriginal()->toMediaCollection('images');
            $product->addMedia(public_path('assets/image/photo/16.webp'))->preservingOriginal()->toMediaCollection('images');
            $product->addMedia(public_path('assets/image/photo/4.webp'))->preservingOriginal()->toMediaCollection('images');
            $product->addMedia(public_path('assets/file/sample.pdf'))->preservingOriginal()->toMediaCollection('document');

            DB::table('product_attributes')->insert([
                [
                    'id' => 1,
                    'product_id' => 2,
                    'title' => json_encode(['tr' => 'Temizlemesi Kolay', 'en' => 'Easy to Clean']),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 2,
                    'product_id' => 2,
                    'title' => json_encode(['tr' => 'Hijyenik', 'en' => 'Hygienic']),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 3,
                    'product_id' => 2,
                    'title' => json_encode(['tr' => 'Çevre Dostu', 'en' => 'Environmentally Friendly']),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 4,
                    'product_id' => 2,
                    'title' => json_encode(['tr' => 'Çizilmeye Dayanıklı', 'en' => 'Scratch Resistant']),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);

            $productAttributes = ProductAttribute::find(1);
            $productAttributes->addMedia(public_path('assets/image/icon/1.webp'))->preservingOriginal()->toMediaCollection('images');
            $productAttributes = ProductAttribute::find(2);
            $productAttributes->addMedia(public_path('assets/image/icon/2.webp'))->preservingOriginal()->toMediaCollection('images');
            $productAttributes = ProductAttribute::find(3);
            $productAttributes->addMedia(public_path('assets/image/icon/3.webp'))->preservingOriginal()->toMediaCollection('images');
            $productAttributes = ProductAttribute::find(4);
            $productAttributes->addMedia(public_path('assets/image/icon/4.webp'))->preservingOriginal()->toMediaCollection('images');


            DB::table('product_collections')->insert([
                [
                    'id' => 5,
                    'name' => json_encode(['tr' => 'Scorpius', 'en' => 'Scorpius']),
                    'slug' => json_encode(['tr' => 'scorpius', 'en' => 'scorpius']),
                    'description' => json_encode(['tr' => null, 'en' => null]),
                    'content' => json_encode(['tr' => null, 'en' => null]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 4,
                    'name' => json_encode(['tr' => 'Orion', 'en' => 'Orion']),
                    'slug' => json_encode(['tr' => 'orion', 'en' => 'orion']),
                    'description' => json_encode(['tr' => null, 'en' => null]),
                    'content' => json_encode(['tr' => null, 'en' => null]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 8,
                    'name' => json_encode(['tr' => 'Mimosa Koleksiyonu', 'en' => 'Mimosa Collection']),
                    'slug' => json_encode(['tr' => 'mimosa-koleksiyonu', 'en' => 'mimosa-collection']),
                    'description' => json_encode(['tr' => null, 'en' => null]),
                    'content' => json_encode(['tr' => null, 'en' => null]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 3,
                    'name' => json_encode(['tr' => 'Lyra', 'en' => 'Lyra']),
                    'slug' => json_encode(['tr' => 'lyra', 'en' => 'lyra']),
                    'description' => json_encode(['tr' => null, 'en' => null]),
                    'content' => json_encode(['tr' => null, 'en' => null]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 6,
                    'name' => json_encode(['tr' => 'Canis', 'en' => 'Canis']),
                    'slug' => json_encode(['tr' => 'canis', 'en' => 'canis']),
                    'description' => json_encode(['tr' => null, 'en' => null]),
                    'content' => json_encode(['tr' => null, 'en' => null]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 7,
                    'name' => json_encode(['tr' => 'Aspiz', 'en' => 'Aspiz']),
                    'slug' => json_encode(['tr' => 'aspiz', 'en' => 'aspiz']),
                    'description' => json_encode(['tr' => null, 'en' => null]),
                    'content' => json_encode(['tr' => null, 'en' => null]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 2,
                    'name' => json_encode(['tr' => 'Archer', 'en' => 'Archer']),
                    'slug' => json_encode(['tr' => 'archer', 'en' => 'archer']),
                    'description' => json_encode(['tr' => null, 'en' => null]),
                    'content' => json_encode(['tr' => null, 'en' => null]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);

            $productCollections = ProductCollection::find(2);
            $productCollections->addMedia(public_path('assets/image/photo/sub-menu-3.webp'))->preservingOriginal()->toMediaCollection('image');
            $productCollections = ProductCollection::find(3);
            $productCollections->addMedia(public_path('assets/image/photo/sub-menu-4.webp'))->preservingOriginal()->toMediaCollection('image');
            $productCollections = ProductCollection::find(4);
            $productCollections->addMedia(public_path('assets/image/photo/sub-menu-5.webp'))->preservingOriginal()->toMediaCollection('image');
            $productCollections = ProductCollection::find(5);
            $productCollections->addMedia(public_path('assets/image/photo/sub-menu-6.webp'))->preservingOriginal()->toMediaCollection('image');
            $productCollections = ProductCollection::find(6);
            $productCollections->addMedia(public_path('assets/image/photo/sub-menu-7.webp'))->preservingOriginal()->toMediaCollection('image');
            $productCollections = ProductCollection::find(7);
            $productCollections->addMedia(public_path('assets/image/photo/sub-menu-8.webp'))->preservingOriginal()->toMediaCollection('image');
            $productCollections = ProductCollection::find(8);
            $productCollections->addMedia(public_path('assets/image/photo/sub-menu-4.webp'))->preservingOriginal()->toMediaCollection('image');



            DB::table('product_collection')->insert([
                [
                    'id' => 1,
                    'product_id' => 2,
                    'product_collection_id' => 8,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);

            DB::table('product_specification_groups')->insert([
                [
                    'id' => 1,
                    'name' => json_encode(['tr' => 'deneme', 'en' => 'example']),
                    'sort' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),

                ],
                [
                    'id' => 2,
                    'name' => json_encode(['tr' => 'Standart', 'en' => 'Default']),
                    'sort' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);

            DB::table('product_specification_group')->insert([
                [
                    'id' => 3,
                    'product_id' => 2,
                    'specification_group_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);

            DB::table('product_specifications')->insert([
                [
                    'id' => 2,
                    'specification_group_id' => 2,
                    'type' => 'table',
                    'options' => null,
                    'name' => json_encode(['tr' => 'Teknik Özellikler', 'en' => 'Technical Specifications']),
                    'sort' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),

                ],
                [
                    'id' => 3,
                    'specification_group_id' => 2,
                    'type' => 'list',
                    'options' => null,
                    'name' => json_encode(['tr' => 'Kenar Profilleri', 'en' => 'Edge Profiles']),
                    'sort' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 4,
                    'specification_group_id' => 2,
                    'type' => 'content',
                    'options' => null,
                    'name' => json_encode(['tr' => 'Kullanım & Bakım', 'en' => 'Use & Maintenance']),
                    'sort' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);

            DB::table('product_specification_values')->insert([
                [
                    'id' => 2,
                    'specification_id' => 2,
                    'value' => json_encode(['tr' => [
                        'label' => 'Kalınlık',
                        'items' => [
                            ['Value' => '<div class="line" style="height: 1.5mm; background-color: #3b3c40"></div> 1.5mm'],
                            ['Value' => '<div class="line" style="height: 2mm; background-color: #3b3c40"></div> 2mm'],
                            ['Value' => '<div class="line" style="height: 3mm; background-color: #3b3c40"></div>3mm']
                        ]
                    ],
                        'en' => [
                            'label' => 'Thickness',
                            'items' => [
                                ['Value' => '<div class="line" style="height: 1.5mm; background-color: #3b3c40"></div> 1.5mm'],
                                ['Value' => '<div class="line" style="height: 2mm; background-color: #3b3c40"></div> 2mm'],
                                ['Value' => '<div class="line" style="height: 3mm; background-color: #3b3c40"></div>3mm']
                            ]
                        ]
                    ]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 3,
                    'specification_id' => 2,
                    'value' => json_encode([
                        'tr' => [
                            'label' => 'Ölçüler',
                            'items' => [
                                ['Value' => '330x165cm'],
                                ['Value' => '350x200cm'],
                                ['Value' => '310x152cm']
                            ]
                        ],
                        'en' => [
                            'label' => 'Dimensions',
                            'items' => [
                                ['Value' => '330x165cm'],
                                ['Value' => '350x200cm'],
                                ['Value' => '310x152cm']
                            ]
                        ]
                    ]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 4,
                    'specification_id' => 3,
                    'value' => json_encode([
                        'tr' => 'Akarsu Profil',
                        'en' => 'Stream Profile'
                    ]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 5,
                    'specification_id' => 3,
                    'value' => json_encode([
                        'tr' => 'Balık Sırtı',
                        'en' => 'Fish Back'
                    ]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 6,
                    'specification_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'value' => json_encode([
                        'tr' => 'Çift Kalınlık 2 + 2 cm',
                        'en' => 'Double Thickness 2 + 2 cm'
                    ])],
                [
                    'id' => 7,
                    'specification_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'value' => json_encode([
                        'tr' => 'Çift Kalınlık 45 Kırpma',
                        'en' => 'Double Thickness 45 Trim'
                    ])],
                [
                    'id' => 8,
                    'specification_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'value' => json_encode([
                        'tr' => 'Çift Kalınlık Balık Sırtı',
                        'en' => 'Double Thickness Herringbone'
                    ])],
                [
                    'id' => 9,
                    'specification_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'value' => json_encode([
                        'tr' => 'Gönye Burun',
                        'en' => 'Mitre Nose'
                    ])],
                [
                    'id' => 10,
                    'specification_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'value' => json_encode([
                        'tr' => 'S-Profil',
                        'en' => 'S-Profile'
                    ])],
                [
                    'id' => 11,
                    'specification_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'value' => json_encode([
                        'tr' => 'Tek Kalınlık 2cm İnce Pah',
                        'en' => 'Single Thickness 2cm Thin Chamfer'
                    ])],
                [
                    'id' => 12,
                    'specification_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'value' => json_encode([
                        'tr' => 'Tek Kalınlık 2cm Yarım Balık Sırtı',
                        'en' => 'Single Thickness 2cm Half Herringbone'
                    ])],
                [
                    'id' => 13,
                    'specification_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'value' => json_encode([
                        'tr' => 'Yay Profil',
                        'en' => 'Spring Profile'
                    ])],
                [
                    'id' => 14,
                    'specification_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'value' => json_encode([
                        'tr' => 'Tek Kalınlık 45 Kırpma Pah',
                        'en' => 'Single Thickness 45 Trimming Chamfer'
                    ])],
                [
                    'id' => 15,
                    'specification_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'value' => json_encode([
                        'tr' => '<p>Gloas kuvars tezgahınızı bakımını kolayıdır.</p><ul><li>Basit temizlik – Ilık sabunlu su sıçraması yeterli olacaktır.</li><li>Patinayı önleyin – Sıvı dökülmelerini ve sıçramalarını silin.</li><li>Lekeleri çıkarma – Onaylanmış bir temizleyiciyle hafifçe ovalayın ve durulayın.</li></ul><p>Honlanmış, Beton ve Pürüzlü yüzeylerin Cilalı yüzeylerimizden daha fazla temizlik gerektirdiğini lütfen unutmayın. Bu yüzeylerde daha fazla maruz kalan yüzey alanı olduğundan, metal izleri, parmak izleri ve günlük yaşamın diğer belirtileri ortaya çıkacaktır. Bu izlerin çoğu, Soft Scrub Sıvı Jel gibi aşındırıcı olmayan temizlik ürünleri ve az çabayla çıkarılabilir.</p><ul><li>Basit temizlik – Ilık sabunlu su sıçraması yeterli olacaktır.</li><li>Patinayı önleyin – Sıvı dökülmelerini ve sıçramalarını silin.</li><li>Lekeleri çıkarma – Onaylanmış bir temizleyiciyle hafifçe ovalayın ve durulayın.</li></ul><p>Honlanmış, Beton ve Pürüzlü yüzeylerin Cilalı yüzeylerimizden daha fazla temizlik gerektirdiğini lütfen unutmayın. Bu yüzeylerde daha fazla maruz kalan yüzey alanı olduğundan, metal izleri, parmak izleri ve günlük yaşamın diğer belirtileri ortaya çıkacaktır. Bu izlerin çoğu, Soft Scrub Sıvı Jel gibi aşındırıcı olmayan temizlik ürünleri ve az çabayla çıkarılabilir.</p>',
                        'en' => '<p>Maintaining your Gloas quartz countertop is easy.</p><ul><li>Simple cleaning – A splash of warm soapy water will suffice.</li><li>Prevent patina – Wipe up spills and splatters.</li><li>Stain removal – Scrub gently with an approved cleaner and rinse.</li></ul><p>Please note that Honed, Concrete and Rough surfaces require more cleaning than our Polished surfaces. Because of the greater amount of exposed surface area on these surfaces, metal marks, fingerprints and other signs of daily life will show through. Most of these marks can be removed with a non-abrasive cleaner such as Soft Scrub Liquid Gel and a little effort.</p><ul><li>Simple cleaning – A splash of warm soapy water will suffice.</li><li>Prevent patina – Wipe up spills and splatters.</li><li>Stain removal – Scrub gently with an approved cleaner and rinse.</li></ul><p>Please note that Honed, Concrete and Rough surfaces require more cleaning than our Polished surfaces. Because of the greater amount of exposed surface area on these surfaces, metal marks, fingerprints and other signs of daily life will show up. Most of these marks can be removed with a non-abrasive cleaner such as Soft Scrub Liquid Gel and a little effort.</p>'
                    ])],
            ]);


            $productSpecifications = ProductSpecificationValue::find(4);
            $productSpecifications->addMedia(public_path('assets/image/photo/corner-profile-1.webp'))->preservingOriginal()->toMediaCollection('image');
            $productSpecifications = ProductSpecificationValue::find(5);
            $productSpecifications->addMedia(public_path('assets/image/photo/corner-profile-2.webp'))->preservingOriginal()->toMediaCollection('image');
            $productSpecifications = ProductSpecificationValue::find(6);
            $productSpecifications->addMedia(public_path('assets/image/photo/corner-profile-3.webp'))->preservingOriginal()->toMediaCollection('image');
            $productSpecifications = ProductSpecificationValue::find(7);
            $productSpecifications->addMedia(public_path('assets/image/photo/corner-profile-4.webp'))->preservingOriginal()->toMediaCollection('image');
            $productSpecifications = ProductSpecificationValue::find(8);
            $productSpecifications->addMedia(public_path('assets/image/photo/corner-profile-5.webp'))->preservingOriginal()->toMediaCollection('image');
            $productSpecifications = ProductSpecificationValue::find(9);
            $productSpecifications->addMedia(public_path('assets/image/photo/corner-profile-6.webp'))->preservingOriginal()->toMediaCollection('image');
            $productSpecifications = ProductSpecificationValue::find(10);
            $productSpecifications->addMedia(public_path('assets/image/photo/corner-profile-7.webp'))->preservingOriginal()->toMediaCollection('image');
            $productSpecifications = ProductSpecificationValue::find(11);
            $productSpecifications->addMedia(public_path('assets/image/photo/corner-profile-8.webp'))->preservingOriginal()->toMediaCollection('image');
            $productSpecifications = ProductSpecificationValue::find(12);
            $productSpecifications->addMedia(public_path('assets/image/photo/corner-profile-9.webp'))->preservingOriginal()->toMediaCollection('image');
            $productSpecifications = ProductSpecificationValue::find(13);
            $productSpecifications->addMedia(public_path('assets/image/photo/corner-profile-10.webp'))->preservingOriginal()->toMediaCollection('image');
            $productSpecifications = ProductSpecificationValue::find(14);
            $productSpecifications->addMedia(public_path('assets/image/photo/corner-profile-11.webp'))->preservingOriginal()->toMediaCollection('image');

        });

    }
}
