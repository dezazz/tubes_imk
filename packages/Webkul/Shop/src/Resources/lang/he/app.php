<?php

return [
    'invalid_vat_format' => 'למזהה המע"מ הנתון יש פורמט שגוי',
    'security-warning'   => 'נמצאה פעילות חשודה!!!',
    'nothing-to-delete'  => 'אין מה למחוק',

    'layouts' => [
        'my-account'            => 'החשבון שלי',
        'profile'               => 'פּרוֹפִיל',
        'address'               => 'כתובת',
        'reviews'               => 'ביקורות',
        'wishlist'              => 'רשימת משאלות',
        'orders'                => 'הזמנות',
        'downloadable-products' => 'מוצרים להורדה',
    ],

    'common' => [
        'error'              =>'משהו השתבש, אנא נסה שוב מאוחר יותר.',
        'image-upload-limit' => 'גודל העלאת התמונה המקסימלי הוא 2MB',
        'no-result-found'    => 'לא הצלחנו למצוא רשומות',
    ],

    'home' => [
        'page-title'          => config('app.name') . ' - בית',
        'featured-products'   => 'מוצרים נבחרים',
        'new-products'        => 'מוצרים חדשים',
        'verify-email'        => 'אמת את חשבון הדוא"ל שלך',
        'resend-verify-email' => 'שלח מחדש דוא"ל אימות',
    ],

    'header' => [
        'title'         => 'חֶשְׁבּוֹן',
        'dropdown-text' => 'נהל עגלה, הזמנות ומשאלות',
        'sign-in'       => 'להתחבר',
        'sign-up'       => 'הירשם',
        'account'       => 'חֶשְׁבּוֹן',
        'cart'          => 'עֲגָלָה',
        'profile'       => 'פּרוֹפִיל',
        'wishlist'      => 'רשימת משאלות',
        'cart'          => 'עֲגָלָה',
        'logout'        => 'להתנתק',
        'search-text'   => 'חפש מוצרים כאן',
    ],

    'minicart' => [
        'view-cart' => 'הצג עגלת קניות',
        'checkout'  => 'לבדוק',
        'cart'      => 'עֲגָלָה',
        'zero'      => '0',
    ],
    'footer' => [
        'subscribe-newsletter' =>'הירשם לניוזלטר',
        'subscribe'            => 'הירשם',
        'locale'               => 'מקומי',
        'currency'             => 'מַטְבֵּעַ',
    ],

    'subscription' => [
        'unsubscribe'    => 'בטל את המנוי',
        'subscribe'      => 'הירשם',
        'subscribed'     => 'אתה רשום כעת למייל הרשמה.',
        'not-subscribed' => 'לא ניתן להירשם למייל הרשמה, אנא נסה שוב מאוחר יותר.',
        'already'        => 'אתה כבר רשום לרשימת המנויים שלנו.',
        'unsubscribed'   => 'אתה בוטל מנוי למייל הרשמה.',
        'already-unsub'  => 'אתה כבר מבוטל.',
        'not-subscribed' => 'שְׁגִיאָה! לא ניתן לשלוח דואר כרגע, אנא נסה שוב מאוחר יותר.',
    ],

    'search' => [
        'no-results'          => 'לא נמצאו תוצאות',
        'page-title'          => config('app.name') . ' - לחפש',
        'found-results'       => 'נמצאו תוצאות חיפוש',
        'found-result'        => 'נמצאה תוצאת חיפוש',
        'analysed-keywords'   => 'מילות מפתח מנותחות',
        'image-search-option' => 'אפשרות חיפוש תמונות',
    ],

    'reviews' => [
        'title'                     => 'כותרת',
        'add-review-page-title'     => 'הוסף ביקורת',
        'write-review'              => 'כתוב ביקורת',
        'review-title'              => 'תן לביקורת שלך כותרת',
        'product-review-page-title' => 'ביקורת מוצר',
        'rating-reviews'            => 'דירוג וביקורות',
        'submit'                    => 'שלח',
        'delete-all'                => 'כל הביקורות נמחקו בהצלחה',
        'ratingreviews'             => ':דירוג דירוגים & :ביקורות ביקורות',
        'star'                      => 'כוכב',
        'percentage'                => ':%%',
        'id-star'                   => 'כוכב',
        'name'                      => 'שֵׁם',
        'login-to-review'           => 'נא להתחבר תחילה כדי לבדוק את המוצר',
    ],

    'customer' => [
        'compare' => [
            'text'                  => 'לְהַשְׁווֹת',
            'compare_similar_items' => 'השווה פריטים דומים',
            'add-tooltip'           => 'הוסף מוצר לרשימת השוואה',
            'added'                 => 'פריט נוסף בהצלחה לרשימת השוואה',
            'already_added'         => 'פריט כבר נוסף לרשימת השוואה',
            'removed'               => 'פריט הוסר בהצלחה מרשימת ההשוואה',
            'removed-all'           => 'כל הפריטים הוסרו בהצלחה מרשימת ההשוואה',
            'confirm-remove-all'    => 'האם אתה בטוח שברצונך למחוק את כל פריטי ההשוואה?',
            'empty-text'            => "אין לך פריטים ברשימת ההשוואה שלך",
            'product_image'         => 'תמונת מוצר',
            'actions'               => 'פעולות',
        ],

        'signup-text' => [
            'account_exists' => 'כבר יש לך חשבון',
            'title'          => 'להתחבר',
        ],

        'signup-form' => [
            'page-title'                  => 'צור חשבון לקוח חדש',
            'title'                       => 'הירשם',
            'firstname'                   => 'שם פרטי',
            'lastname'                    => 'שם משפחה',
            'email'                       => 'אימייל',
            'password'                    => 'סיסמה',
            'confirm_pass'                => 'אשר סיסמה',
            'button_title'                => 'להירשם',
            'agree'                       => 'לְהַסכִּים',
            'terms'                       => 'תנאים',
            'conditions'                  => 'תנאים',
            'using'                       => 'על ידי שימוש באתר זה',
            'agreement'                   => 'הֶסכֵּם',
            'subscribe-to-newsletter'     => 'הירשם לעדכונים',
            'success'                     => 'החשבון נוצר בהצלחה.',
            'success-verify'              => 'החשבון נוצר בהצלחה, הודעת דואר אלקטרוני נשלחה לאימות.',
            'success-verify-email-unsent' => 'החשבון נוצר בהצלחה, אך דואר אלקטרוני לאימות לא נשלח.',
            'failed'                      => 'שְׁגִיאָה! לא ניתן ליצור את החשבון שלך, אנא נסה שוב מאוחר יותר.',
            'already-verified'            => 'החשבון שלך כבר אומת או בבקשה נסה לשלוח שוב דוא"ל אימות חדש.',
            'verification-not-sent'       => 'שְׁגִיאָה! בעיה בשליחת דוא"ל אימות, אנא נסה שוב מאוחר יותר.',
            'verification-sent'           => 'אימייל אימות נשלח',
            'verified'                    => 'החשבון שלך אומת, נסה להיכנס עכשיו.',
            'verify-failed'               => 'איננו יכולים לאמת את חשבון הדואר שלך.',
            'dont-have-account'           => 'אין לך חשבון איתנו',
            'customer-registration'       => 'לקוח נרשם בהצלחה',
        ],

        'login-text' => [
            'no_account' => 'אין לך חשבון',
            'title'      => 'הירשם',
        ],

        'login-form' => [
            'page-title'          => 'כניסת לקוחות',
            'title'               => 'להתחבר',
            'email'               => 'אימייל',
            'password'            => 'סיסמה',
            'forgot_pass'         => 'שכחת את הסיסמא?',
            'button_title'        => 'להתחבר',
            'remember'            => 'זכור אותי',
            'footer'              => '© Copyright :year Webkul Software, כל הזכויות שמורות',
            'invalid-creds'       => 'אנא בדוק את האישורים שלך ונסה שוב.',
            'verify-first'        => 'אמת תחילה את חשבון הדוא"ל שלך.',
            'not-activated'       => 'ההפעלה שלך מבקשת אישור מנהל',
            'resend-verification' => 'שלח שוב דואר אימות',
            'show-password'       => 'הראה סיסמה',

        ],

        'forgot-password' => [
            'title'      => 'שחזר סיסמה',
            'email'      => 'אימייל',
            'submit'     => 'שלח אימייל לאיפוס סיסמה',
            'page_title' => 'שכחת ססמה ?',
        ],

        'reset-password' => [
            'title'            => 'לאפס את הסיסמה',
            'email'            => 'דוא"ל רשום',
            'password'         => 'סיסמה',
            'confirm-password' => 'אשר סיסמה',
            'back-link-title'  => 'חזרה לכניסה',
            'submit-btn-title' => 'לאפס את הסיסמה',
        ],

        'account' => [
            'dashboard' => 'ערוך פרופיל',
            'menu'      => 'תַפרִיט',

            'general' => [
                'no'  => 'לא',
                'yes' => 'כן',
            ],

            'profile' => [
                'index' => [
                    'page-title' => 'פּרוֹפִיל',
                    'title'      => 'פּרוֹפִיל',
                    'edit'       => 'לַעֲרוֹך',
                ],

                'edit-success'  => 'הפרופיל עודכן בהצלחה.',
                'edit-fail'     => 'שְׁגִיאָה! לא ניתן לעדכן את הפרופיל, אנא נסה שוב מאוחר יותר.',
                'unmatch'       => 'הסיסמה הישנה לא תואמת.',

                'fname'         => 'שם פרטי',
                'lname'         => 'שם משפחה',
                'gender'        => 'מִין',
                'other'         => 'אַחֵר',
                'male'          => 'זָכָר',
                'female'        => 'נְקֵבָה',
                'dob'           => 'תאריך לידה',
                'phone'         => 'מכשיר טלפון',
                'email'         => 'אימייל',
                'opassword'     => 'סיסמה ישנה',
                'password'      => 'סיסמה',
                'cpassword'     => 'אשר סיסמה',
                'submit'        => 'עדכן פרופיל',

                'edit-profile' => [
                    'title'      => 'ערוך פרופיל',
                    'page-title' => 'ערוך פרופיל',
                ],
            ],

            'address' => [
                'index' => [
                    'page-title'     => 'כתובת',
                    'title'          => 'כתובת',
                    'add'            => 'הוסף כתובת',
                    'edit'           => 'לַעֲרוֹך',
                    'empty'          => 'אין לך כאן כתובות שמורות, אנא נסה ליצור אותה על ידי לחיצה על כפתור ההוספה.',
                    'create'         => 'צור כתובת',
                    'delete'         => 'לִמְחוֹק',
                    'make-default'   => 'הפוך לברירת מחדל',
                    'default'        => 'בְּרִירַת מֶחדָל',
                    'contact'        => 'איש קשר',
                    'confirm-delete' => 'האם אתה באמת רוצה למחוק את הכתובת הזו?',
                    'default-delete' => 'לא ניתן לשנות את כתובת ברירת המחדל.',
                    'enter-password' => 'הכנס סיסמתך.',
                ],

                'create' => [
                    'page-title'     => 'הוסף כתובת',
                    'company_name'   => 'שם החברה',
                    'first_name'     => 'שם פרטי',
                    'last_name'      => 'שם משפחה',
                    'vat_id'         => 'מזהה מע"מ',
                    'vat_help_note'  => '[הערה: השתמש בקוד מדינה עם מזהה מע"מ. לְמָשָׁל. INV01234567891]',
                    'title'          => 'הוסף כתובת',
                    'street-address' => 'כתובת רחוב',
                    'country'        => 'מדינה',
                    'state'          => 'מדינה',
                    'select-state'   => 'בחר אזור, מדינה או מחוז',
                    'city'           => 'עִיר',
                    'postcode'       => 'מיקוד',
                    'phone'          => 'מכשיר טלפון',
                    'submit'         => 'שמור כתובת',
                    'success'        => 'הכתובת נוספה בהצלחה.',
                    'error'          => 'לא ניתן להוסיף כתובת.',
                ],

                'edit' => [
                    'page-title'     => 'ערוך כתובת',
                    'company_name'   => 'שם החברה',
                    'first_name'     => 'שם פרטי',
                    'last_name'      => 'שם משפחה',
                    'vat_id'         => 'מזהה מע"מ',
                    'title'          => 'ערוך כתובת',
                    'street-address' => 'כתובת רחוב',
                    'submit'         => 'שמור כתובת',
                    'success'        => 'הכתובת עודכנה בהצלחה.',
                ],

                'delete' => [
                    'success'        => 'הכתובת נמחקה בהצלחה',
                    'failure'        => 'לא ניתן למחוק כתובת',
                    'wrong-password' => 'סיסמה שגויה !',
                ],

                'default-address'    => 'כתובת ברירת מחדל',
            ],

            'order' => [
                'index' => [
                    'page-title'      => 'הזמנות',
                    'title'           => 'הזמנות',
                    'order_id'        => 'מספר הזמנה',
                    'date'            => 'תַאֲרִיך',
                    'status'          => 'סטָטוּס',
                    'total'           => 'סך הכל',
                    'order_number'    => 'מספר הזמנה',
                    'processing'      => 'מעבד',
                    'completed'       => 'הושלם',
                    'canceled'        => 'מבוטל',
                    'closed'          => 'סָגוּר',
                    'pending'         => 'ממתין ל',
                    'pending-payment' => 'בהמתנה לתשלום',
                    'fraud'           => 'הונאה',
                ],

                'view' => [
                    'page-tile'           => 'Order #:order_id',
                    'info'                => 'מֵידָע',
                    'placed-on'           => 'ממוקם ב',
                    'products-ordered'    => 'מוצרים שהוזמנו',
                    'invoices'            => 'חשבוניות',
                    'shipments'           => 'משלוחים',
                    'SKU'                 => 'SKU',
                    'product-name'        => 'שֵׁם',
                    'qty'                 => 'כמות',
                    'item-status'         => 'סטטוס פריט',
                    'item-ordered'        => 'Ordered (:qty_ordered)',
                    'item-invoice'        => 'חשבונית (:qty_invoiced)',
                    'item-shipped'        => 'shipped (:qty_shipped)',
                    'item-canceled'       => 'מבוטל (:qty_cancelled)',
                    'item-refunded'       => 'החזר (:qty_refunded)',
                    'price'               => 'מחיר',
                    'total'               => 'סך הכל',
                    'subtotal'            => 'סכומי משנה',
                    'shipping-handling'   => 'משלוח וטיפול',
                    'tax'                 => 'מַס',
                    'discount'            => 'הנחה',
                    'tax-percent'         => 'אחוז מס',
                    'tax-amount'          => 'כמות מס',
                    'discount-amount'     => 'כמות ההנחה',
                    'grand-total'         => 'סכום סופי',
                    'total-paid'          => 'סך הכל שולם',
                    'total-refunded'      => 'סה"כ הוחזר',
                    'total-due'           => 'סך הכל לתשלום',
                    'shipping-address'    => 'כתובת למשלוח',
                    'billing-address'     => 'כתובת לחיוב',
                    'shipping-method'     => 'שיטת משלוח',
                    'payment-method'      => 'אמצעי תשלום',
                    'individual-invoice'  => 'Invoice #:invoice_id',
                    'individual-shipment' => "משלוח מס':מזהה_משלוח",
                    'print'               => 'הדפס',
                    'invoice-id'          => 'מזהה חשבונית',
                    'order-id'            => 'מספר הזמנה',
                    'order-date'          => 'תאריך הזמנה',
                    'invoice-date'        => 'תאריך חשבונית',
                    'payment-terms'       => 'תנאי תשלום',
                    'bill-to'             => 'ביל ל',
                    'ship-to'             => 'לשלוח ל',
                    'contact'             => 'איש קשר',
                    'refunds'             => 'החזרים',
                    'individual-refund'   => 'Refund #:refund_id',
                    'adjustment-refund'   => 'החזר התאמה',
                    'adjustment-fee'      => 'עמלת התאמה',
                    'cancel-btn-title'    => 'לְבַטֵל',
                    'tracking-number'     => 'מספר מעקב',
                    'cancel-confirm-msg'  => 'האם אתה בטוח שאתה רוצה לבטל את ההזמנה הזו?',
                ],
            ],

            'wishlist' => [
                'page-title'           => 'רשימת משאלות',
                'title'                => 'רשימת משאלות',
                'deleteall'            => 'מחק הכל',
                'confirm-delete-all'   => 'האם אתה בטוח שאתה רוצה למחוק את כל רשימות המשאלות?',
                'moveall'              => 'העבר את כל המוצרים לעגלה',
                'move-to-cart'         => 'העבר לעגלה',
                'error'                => 'לא ניתן להוסיף מוצר לרשימת המשאלות עקב בעיות לא ידועות, אנא חזור מאוחר יותר',
                'add'                  => 'פריט נוסף בהצלחה לרשימת המשאלות',
                'remove'               => 'פריט הוסר בהצלחה מרשימת המשאלות',
                'add-wishlist-text'    => 'הוסף מוצר לרשימת המשאלות',
                'remove-wishlist-text' => 'הסר מוצר מרשימת המשאלות',
                'moved'                => 'הפריט הועבר בהצלחה לעגלה',
                'option-missing'       => 'חסרות אפשרויות מוצר, כך שלא ניתן להעביר את הפריט לרשימת המשאלות.',
                'move-error'           => 'לא ניתן להעביר את הפריט לרשימת המשאלות, אנא נסה שוב מאוחר יותר',
                'success'              => 'פריט נוסף בהצלחה לרשימת המשאלות',
                'failure'              => 'לא ניתן להוסיף פריט לרשימת המשאלות, אנא נסה שוב מאוחר יותר',
                'already'              => 'פריט כבר קיים ברשימת המשאלות שלך',
                'removed'              => 'פריט הוסר בהצלחה מרשימת המשאלות',
                'remove-fail'          => 'לא ניתן להסיר את הפריט מרשימת המשאלות, אנא נסה שוב מאוחר יותר',
                'empty'                => 'אין לך פריטים ברשימת המשאלות',
                'remove-all-success'   => 'כל הפריטים מרשימת המשאלות שלך הוסרו',
                'save'                 => 'להציל',
                'share'                => 'לַחֲלוֹק',
                'share-wishlist'       => 'שתף משאלות',
                'wishlist-sharing'     => 'שיתוף רשימת המשאלות',
                'shared-link'          => 'קישור משותף',
                'copy'                 => 'Copy',
                'visibility'           => 'רְאוּת',
                'public'               => 'פּוּמְבֵּי',
                'private'              => 'פְּרָטִי',
                'enable'               => 'לְאַפשֵׁר',
                'disable'              => 'השבת',
                'customer-name'        => ':name\'s wished shared',
                'enable-wishlist-info' => 'הפעל שיתוף רשימת משאלות כדי לקבל את הקישור.',
                'update-message'       => 'הגדרות רשימת המשאלות המשותפת עודכנו בהצלחה',
            ],

            'downloadable_products' => [
                'title'               => 'מוצרים להורדה',
                'order-id'            => 'מספר הזמנה',
                'date'                => 'תַאֲרִיך',
                'name'                => 'כותרת',
                'status'              => 'סטָטוּס',
                'pending'             => 'ממתין ל',
                'available'           => 'זמין',
                'expired'             => 'לא בתוקף',
                'remaining-downloads' => 'הורדות שנותרו',
                'unlimited'           => 'ללא הגבלה',
                'download-error'      => 'פג תוקפו של קישור ההורדה.',
                'payment-error'       => 'לא בוצע תשלום עבור הורדה זו.',
            ],

            'review' => [
                'index' => [
                    'title'      => 'ביקורות',
                    'page-title' => 'ביקורות',

                ],

                'view' => [
                    'page-tile' => 'סקירה#:id',
                ],

                'delete' => [
                    'confirmation-message' => 'האם אתה בטוח שאתה רוצה למחוק את הביקורת הזו?',
                ],

                'delete-all' => [
                    'title'                => 'מחק הכל',
                    'confirmation-message' => 'האם אתה בטוח שאתה רוצה למחוק את כל הביקורות?',
                ],
            ],
        ],
    ],

    'products' => [
        'layered-nav-title'        => 'קנה לפי',
        'price-label'              => 'נמוך כמו',
        'remove-filter-link-title' => 'נקה הכל',
        'filter-to'                => 'ל',
        'sort-by'                  => 'מיין לפי',
        'from-a-z'                 => 'מא-ת',
        'from-z-a'                 => 'מז-א',
        'newest-first'             => 'החדש ביותר יהיה ראשון',
        'oldest-first'             => 'המבוגר ביותר ראשון',
        'cheapest-first'           => 'הכי זול ראשון',
        'expensive-first'          => 'יקר קודם',
        'show'                     => 'הופעה',
        'pager-info'               => 'מציג :הצגה של :סה"כ פריטים',
        'description'              => 'תיאור',
        'specification'            => 'מִפרָט',
        'total-reviews'            => ':סה"כ ביקורות',
        'total-rating'             => ':total_rating דירוגים ו:total_reviews ביקורות',
        'by'                       => 'לפי שם',
        'up-sell-title'            => 'מצאנו מוצרים אחרים שאולי תאהבו!',
        'related-product-title'    => 'מוצרים קשורים',
        'cross-sell-title'         => 'עוד בחירות',
        'reviews-title'            => 'דירוגים וסקירות',
        'write-review-btn'         => 'כתוב ביקורת',
        'choose-option'            => 'בחר אפשרות',
        'sale'                     => 'מְכִירָה',
        'new'                      => 'חָדָשׁ',
        'empty'                    => 'אין מוצרים זמינים בקטגוריה זו',
        'add-to-cart'              => 'הוסף לעגלה',
        'book-now'                 => 'להזמין עכשיו',
        'buy-now'                  => 'קנה עכשיו',
        'whoops'                   => 'וואס!',
        'quantity'                 => 'כַּמוּת',
        'in-stock'                 => 'במלאי',
        'out-of-stock'             => 'אזל במלאי',
        'view-all'                 => 'צפה בהכל',
        'select-above-options'     => 'אנא בחר תחילה את האפשרויות לעיל.',
        'less-quantity'            => 'הכמות לא יכולה להיות פחות מאחד',
        'samples'                  => 'דגימות',
        'links'                    => 'קישורים',
        'sample'                   => 'לִטעוֹם',
        'name'                     => 'שֵׁם',
        'qty'                      => 'כמות',
        'starting-at'              => 'מתחיל ב',
        'customize-options'        => 'התאמה אישית של אפשרויות',
        'choose-selection'         => 'בחר בחירה',
        'your-customization'       => 'ההתאמה האישית שלך',
        'total-amount'             => 'הכמות הכוללת',
        'none'                     => 'אף אחד',
        'available-for-order'      => 'זמין להזמנה',
        'settings'                 => 'הגדרות',
        'compare_options'          => 'השווה אפשרויות',
        'wishlist-options'         => 'אפשרויות רשימת משאלות',
        'offers'                   => 'קנה :כמות עבור :price כל אחד וחסוך :discount%',
        'tax-inclusive'            => 'כולל כל המסים',
    ],

    'buynow' => [
        'no-options' =>'אנא בחר אפשרויות לפני רכישת מוצר זה.',
    ],

    'checkout' => [
        'cart' => [
            'integrity'                 => [
                'missing_fields'  => 'חסרים כמה שדות חובה עבור מוצר זה.',
                'missing_options' => 'חסרות אפשרויות עבור המוצר הזה.',
                'missing_links'   => 'חסרים קישורים להורדה למוצר זה.',
                'qty_missing'     => 'לפחות מוצר אחד צריך לכלול יותר מכמות אחת.',
                'qty_impossible'  => 'לא ניתן להוסיף יותר מאחד מהמוצרים האלה לעגלה.',
                'select_hourly_duration' => 'בחר משך משבצת של שעה אחת.',
            ],
            'create-error'              => 'נתקלתי בבעיה כלשהי בעת יצירת מופע של עגלה.',
            'title'                     => 'עגלת קניות',
            'empty'                     => 'עגלת הקניות שלך ריקה',
            'update-cart'               => 'עדכן עגלת קניות',
            'continue-shopping'         => 'המשך בקניות',
            'continue-registration'     => 'המשך ההרשמה',
            'proceed-to-checkout'       => 'התקדם לנקודת הביקורת',
            'remove'                    => 'לְהַסִיר',
            'remove-link'               => 'לְהַסִיר',
            'remove-all-items'          => 'הסר את כל הפריטים',
            'confirm-action'            => 'אשר פעולה',
            'move-to-wishlist'          => 'העבר לרשימת משאלות',
            'move-to-wishlist-success'  => 'הפריט הועבר לרשימת המשאלות בהצלחה.',
            'move-to-wishlist-error'    => 'לא ניתן להעביר פריט לרשימת המשאלות, אנא נסה שוב מאוחר יותר.',
            'add-config-warning'        => 'אנא בחר אפשרות לפני הוספה לעגלה.',
            'quantity'                  => [
                'quantity'          => 'כַּמוּת',
                'success'           => 'פריטי עגלת הקניות עודכנו בהצלחה.',
                'illegal'           => 'הכמות לא יכולה להיות קטנה מאחד',
                'inventory_warning' => 'הכמות המבוקשת אינה זמינה, אנא נסה שוב מאוחר יותר.',
                'error'             => 'לא ניתן לעדכן את הפריט/ים כרגע, אנא נסה שוב מאוחר יותר.',
            ],
            'item'                      => [
                'error_remove'   => 'אין פריטים להסיר מהסל.',
                'success'        => 'הפריט הוסף בהצלחה לעגלה.',
                'success-remove' => 'הפריט הוסר בהצלחה מהסל.',
                'error-add'      => 'לא ניתן להוסיף את הפריט לעגלה, אנא נסה שוב מאוחר יותר.',
                'inactive'       => 'פריט אינו פעיל והוסר מהסל.',
                'inactive-add'   => 'לא ניתן להוסיף פריט לא פעיל לעגלה.',
            ],
            'quantity-error'            => 'הכמות המבוקשת לא זמינה.',
            'cart-subtotal'             => 'סיכום ביניים של עגלת הקניות',
            'cart-remove-action'        => 'אתה באמת רוצה לעשות את זה?',
            'partial-cart-update'       => 'רק חלק מהמוצרים עודכנו',
            'link-missing'              => '',
            'event'                     => [
                'expired' => 'פג תוקף האירוע הזה.',
            ],
            'minimum-order-message'     => 'כמות ההזמנה המינימלית היא :כמות',
            'suspended-account-message' => 'חשבונך הושעה.',
            'inactive-account-message' =>  'החשבון שלך לא היה פעיל.',
            'check-shipping-address'    => 'אנא בדוק כתובת למשלוח.',
            'check-billing-address'     => 'אנא בדוק את כתובת החיוב.',
            'specify-shipping-method'   => 'אנא ציין את שיטת המשלוח.',
            'specify-payment-method'    => 'אנא ציין אמצעי תשלום.',
            'rule-applied'              => 'Cart rule applied',
            'paypal-payment-canceled'   => 'Paypal payment has been canceled.',
        ],

        'onepage' => [
            'title'               => 'לבדוק',
            'information'         => 'מֵידָע',
            'shipping'            => 'משלוח',
            'payment'             => 'תַשְׁלוּם',
            'complete'            => 'לְהַשְׁלִים',
            'review'              => 'סקירה',
            'billing-address'     => 'כתובת לחיוב',
            'sign-in'             => 'להתחבר',
            'company-name'        => 'שם החברה',
            'first-name'          => 'שם פרטי',
            'last-name'           => 'שם משפחה',
            'email'               => 'אימייל',
            'address1'            => 'כתובת רחוב',
            'city'                => 'עִיר',
            'state'               => 'מדינה',
            'select-state'        => 'בחר אזור, מדינה או מחוז',
            'postcode'            => 'מיקוד',
            'phone'               => 'טֵלֵפוֹן',
            'country'             => 'מדינה',
            'order-summary'       => 'סיכום הזמנה',
            'shipping-address'    => 'כתובת למשלוח',
            'use_for_shipping'    => 'שלח לכתובת זו',
            'continue'            => 'לְהַמשִׁיך',
            'shipping-method'     => 'בחר שיטת משלוח',
            'payment-methods'     => 'בחר שיטת תשלום',
            'payment-method'      => 'אמצעי תשלום',
            'summary'             => 'סיכום הזמנה',
            'price'               => 'מחיר',
            'quantity'            => 'כַּמוּת',
            'billing-address'     => 'כתובת לחיוב',
            'shipping-address'    => 'כתובת למשלוח',
            'contact'             => 'איש קשר',
            'place-order'         => 'בצע הזמנה',
            'new-address'         => 'הוסף כתובת חדשה',
            'save_as_address'     => 'שמור את הכתובת הזו',
            'apply-coupon'        => 'החל קופון',
            'amt-payable'         => 'הסכום לתשלום',
            'got'                 => 'יש',
            'free'                => 'חינם',
            'coupon-used'         => 'קופון בשימוש',
            'applied'             => 'הוחל',
            'back'                => 'חזור',
            'cash-desc'           => 'מזומן בעת ​​משלוח',
            'money-desc'          => 'העברת כספים',
            'paypal-desc'         => 'Paypal Standard',
            'free-desc'           => 'זהו משלוח חינם',
            'flat-desc'           => 'זהו תעריף אחיד',
            'password'            => 'סיסמה',
            'login-exist-message' => 'כבר יש לך חשבון איתנו, היכנס או המשך כאורח',
            'enter-coupon-code'   => 'הכנס קוד קופון',
        ],

        'total' => [
            'order-summary'       => 'סיכום הזמנה',
            'sub-total'           => 'פריטים',
            'grand-total'         => 'סכום סופי',
            'delivery-charges'    => 'דמי משלוח',
            'tax'                 => 'מַס',
            'discount'            => 'הנחה',
            'price'               => 'מחיר',
            'disc-amount'         => 'כמות בהנחה',
            'new-grand-total'     => 'Grand Total חדש',
            'coupon'              => 'קוּפּוֹן',
            'coupon-applied'      => 'קופון מוחל',
            'remove-coupon'       => 'הסר קופון',
            'cannot-apply-coupon' => 'לא ניתן להחיל קופון',
            'invalid-coupon'      => 'קוד הקופון אינו חוקי.',
            'success-coupon'      => 'קוד הקופון הוחל בהצלחה.',
            'coupon-apply-issue'  => 'לא ניתן להחיל קוד קופון.',
            'coupon-already-applied' => 'קוד קופון כבר הוחל.',
        ],

        'success' => [
            'title'         => 'ההזמנה בוצעה בהצלחה',
            'thanks'        => 'תודה על הזמנתך!',
            'order-id-info' => 'מזהה ההזמנה שלך הוא #:order_id',
            'info'          => 'אנו נשלח לך דוא"ל, פרטי ההזמנה שלך ופרטי מעקב',
        ],
    ],

    'mail' => [
        'order' => [
            'subject'           => 'אישור הזמנה חדשה',
            'heading'           => 'אישור הזמנה!',
            'dear'              => 'יקר :שם_לקוח',
            'dear-admin'        => 'יקר :admin_name',
            'greeting'          => 'תודה על הזמנתך :order_id שבוצעה ב-:created_at',
            'greeting-admin'    => 'מזהה הזמנה :order_id הוצב ב-:created_at',
            'summary'           => 'סיכום הסדר',
            'shipping-address'  => 'כתובת למשלוח',
            'billing-address'   => 'כתובת לחיוב',
            'contact'           => 'איש קשר',
            'shipping'          => 'שיטת משלוח',
            'payment'           => 'אמצעי תשלום',
            'price'             => 'מחיר',
            'quantity'          => 'כַּמוּת',
            'subtotal'          => 'סכומי משנה',
            'shipping-handling' => 'משלוח וטיפול',
            'tax'               => 'מַס',
            'discount'          => 'הנחה',
            'grand-total'       => 'סכום סופי',
            'final-summary'     => "תודה שהבעת את התעניינותך בחנות שלנו, אנו נשלח לך מספר מעקב לאחר שנשלח",
            'help'              => 'אם אתה צריך כל סוג של עזרה, אנא צור איתנו קשר בכתובת:support_email',
            'thanks'            => 'תודה!',

            'comment' => [
                'subject'       => 'הערה חדשה נוספה להזמנה שלך #:order_id',
                'dear'          => 'יקר :שם_לקוח',
                'final-summary' => 'תודה שהבעת את התעניינותך בחנות שלנו',
                'help'          => 'אם אתה צריך כל סוג של עזרה, אנא צור איתנו קשר בכתובת:support_email',
                'thanks'        => 'תודה!',
            ],

            'cancel' => [
                'subject'           => 'אישור ביטול הזמנה',
                'heading'           => 'ההזמנה בוטלה',
                'dear'              => 'יקר :שם_לקוח',
                'greeting'          => 'ההזמנה שלך עם מזהה ההזמנה :order_id שבוצעה ב-:created_at בוטלה',
                'summary'           => 'סיכום הסדר',
                'shipping-address'  => 'כתובת למשלוח',
                'billing-address'   => 'כתובת לחיוב',
                'contact'           => 'איש קשר',
                'shipping'          => 'שיטת משלוח',
                'payment'           => 'אמצעי תשלום',
                'subtotal'          => 'סכומי משנה',
                'shipping-handling' => 'משלוח וטיפול',
                'tax'               => 'מַס',
                'discount'          => 'הנחה',
                'grand-total'       => 'סכום סופי',
                'final-summary'     => 'תודה שהבעת את התעניינותך בחנות שלנו',
                'help'              => 'אם אתה צריך כל סוג של עזרה, אנא צור איתנו קשר בכתובת:support_email',
                'thanks'            => 'תודה!',
            ],
        ],

        'invoice' => [
            'heading'  => "החשבונית שלך #:invoice_id עבור הזמנה מס':order_id",
            'subject'  => 'חשבונית עבור ההזמנה שלך #:order_id',
            'summary'  => 'סיכום חשבונית',
            'reminder' => [
                'subject'                                          => 'תזכורת חשבונית',
                'your-invoice-is-overdue'                          => 'החשבונית :invoice שלך ​​הגיעה באיחור ב-:time.',
                'please-make-your-payment-as-soon-as-possible'     => 'אנא בצע את התשלום שלך בהקדם האפשרי.',
                'if-you-ve-already-paid-just-disregard-this-email' => 'אם כבר שילמת, פשוט תתעלם מהמייל הזה.',
            ],
        ],

        'shipment' => [
            'heading'           => "משלוח #:shipment_id נוצר עבור הזמנה מס':order_id",
            'inventory-heading' => "משלוח חדש #:shipment_id נוצר עבור הזמנה מס':order_id",
            'subject'           => 'משלוח עבור ההזמנה שלך #:order_id',
            'inventory-subject' => "נוצר משלוח חדש עבור הזמנה מס':order_id",
            'summary'           => 'סיכום משלוח',
            'carrier'           => 'מוֹבִיל',
            'tracking-number'   => 'מספר מעקב',
            'greeting'          => 'הזמנה :order_id בוצעה ב-:created_at',
        ],

        'refund' => [
            'heading'           => "החזר מס':refund_id עבור הזמנה מס':order_id",
            'subject'           => 'החזר עבור ההזמנה שלך #:order_id',
            'summary'           => 'סיכום החזר',
            'adjustment-refund' => 'החזר התאמה',
            'adjustment-fee'    => 'עמלת התאמה',
        ],

        'forget-password' => [
            'subject'        => 'איפוס סיסמא ללקוח',
            'dear'           => 'יקירי :שם',
            'info'           => 'אתה מקבל דוא"ל זה מכיוון שקיבלנו בקשה לאיפוס סיסמה עבור חשבונך',
            'reset-password' => 'לאפס את הסיסמה',
            'final-summary'  => 'אם לא ביקשת איפוס סיסמה, אין צורך בפעולה נוספת',
            'thanks'         => 'תודה!',
        ],

        'update-password' => [
            'subject' => 'הסיסמה עודכנה',
            'dear'    => 'יקירי :שם',
            'info'    => 'אתה מקבל דוא"ל זה כי עדכנת את הסיסמה שלך.',
            'thanks'  => 'תודה!',
        ],

        'customer' => [
            'new' => [
                'dear'           => 'יקר :שם_לקוח',
                'username-email' => 'שם משתמש/אימייל',
                'subject'        => 'רישום לקוח חדש',
                'password'       => 'סיסמה',
                'summary'        => 'החשבון שלך נוצר.
                פרטי החשבון שלך נמצאים להלן: ',
                'thanks'         => 'תודה!',
            ],

            'registration' => [
                'subject'               => 'רישום לקוח חדש',
                'customer-registration' => 'לקוח נרשם בהצלחה',
                'dear'                  => 'יקר :שם_לקוח',
                'dear-admin'            => 'יקר :admin_name',
                'greeting'              => 'ברוך הבא ותודה שנרשמת אלינו!',
                'greeting-admin'        => 'יש לך רישום לקוח חדש אחד.',
                'summary'               => 'החשבון שלך נוצר כעת בהצלחה ואתה יכול להתחבר באמצעות כתובת הדוא"ל והסיסמה שלך. לאחר הכניסה, תוכל לגשת לשירותים אחרים כולל סקירת הזמנות קודמות, רשימות משאלות ועריכת פרטי החשבון שלך.',
                'thanks'                => 'תודה!',
            ],

            'verification' => [
                'heading' => config('app.name') . ' - אימות אימייל',
                'subject' => 'דואר אימות',
                'verify'  => 'אמת את חשבונך',
                'summary' => 'זה הדואר לאימות שכתובת האימייל שהזנת היא שלך.
                אנא לחץ על הלחצן אמת את חשבונך למטה כדי לאמת את חשבונך.',
            ],

            'subscription' => [
                'subject'     => 'דוא"ל מנוי',
                'greeting'    => ' ברוך הבא ל ' . config('app.name') . ' - מנוי דוא"ל',
                'unsubscribe' => 'בטל את הרישום',
                'summary'     => '״תודה שהכנסת אותי לתיבת הדואר הנכנס שלך. עבר זמן מאז שקראת את' . config('app.name') . ' דוא"ל, ואנחנו לא רוצים להציף את תיבת הדואר הנכנס שלך. אם אתה עדיין לא רוצה לקבל
                את החדשות האחרונות בתחום השיווק בדוא"ל, אז בוודאות לחץ על הלחצן למטה.',
            ],
        ],
    ],

    'webkul' => [
        'copy-right' => '© זכויות יוצרים: שנת תוכנת Webkul, כל הזכויות שמורות',
    ],

    'response' => [
        'create-success' => ':name נוצר בהצלחה.',
        'update-success' => ':name עודכן בהצלחה.',
        'delete-success' => ':name נמחק בהצלחה.',
        'submit-success' => ':name נשלח בהצלחה.',
    ],
];?>