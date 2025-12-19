<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Catering Berkah</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* =====================
           RESET
        ===================== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #fdfcfb, #f3efe8);
            color: #2c2c2c;
            min-height: 100vh;
        }

        /* =====================
           NAVBAR FLOATING
        ===================== */
        .navbar {
            position: sticky;
            top: 20px;
            margin: 20px auto;
            max-width: 1100px;
            padding: 14px 28px;
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(14px);
            border-radius: 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 12px 30px rgba(0,0,0,0.08);
            z-index: 99;
        }

        .brand {
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 1px;
            color: #6b705c;
        }

        .brand span {
            color: #cb997e;
        }

        .nav-links a {
            margin-left: 22px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            color: #444;
            position: relative;
            transition: 0.3s;
        }

        .nav-links a::after {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            background: #cb997e;
            bottom: -6px;
            left: 0;
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: #cb997e;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* =====================
           MAIN CONTAINER
        ===================== */
        main {
            max-width: 1100px;
            margin: 60px auto;
            padding: 0 20px;
        }

        /* =====================
           CONTENT CARD WRAPPER
        ===================== */
        .content-wrapper {
            background: #ffffff;
            border-radius: 26px;
            padding: 40px;
            box-shadow: 0 25px 60px rgba(0,0,0,0.08);
        }

        /* =====================
           CARD DEFAULT
        ===================== */
        .card {
            background: #fafafa;
            border-radius: 18px;
            padding: 22px;
            margin-bottom: 24px;
            border-left: 6px solid #cb997e;
            transition: 0.35s ease;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 35px rgba(0,0,0,0.12);
            background: #fff;
        }

        /* =====================
           FOOTER
        ===================== */
        footer {
            margin-top: 80px;
            padding: 30px 0;
            text-align: center;
            font-size: 13px;
            color: #777;
        }

        footer strong {
            color: #cb997e;
        }

        /* =====================
           RESPONSIVE
        ===================== */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 10px;
            }

            .nav-links a {
                margin: 0 10px;
            }

            .content-wrapper {
                padding: 26px;
            }
        }
        /* HERO */
.hero {
    margin-bottom: 50px;
}

.hero h1 {
    font-size: 32px;
    font-weight: 700;
    color: #2f3e46;
}

.hero h1 span {
    color: #cb997e;
}

.hero p {
    margin-top: 12px;
    max-width: 600px;
    line-height: 1.7;
    color: #555;
}

/* SECTION */
.menu-section {
    margin-bottom: 60px;
}

.section-header {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 24px;
}

.section-header h2 {
    font-size: 22px;
    font-weight: 600;
    color: #3a5a40;
}

.section-header .line {
    flex: 1;
    height: 2px;
    background: linear-gradient(to right, #cb997e, transparent);
}

/* GRID */
.menu-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 22px;
}

/* CARD */
.menu-card {
    background: #ffffff;
    border-radius: 18px;
    padding: 20px;
    box-shadow: 0 12px 28px rgba(0,0,0,0.08);
    transition: 0.35s ease;
    cursor: pointer;
}

.menu-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 40px rgba(0,0,0,0.12);
}

.menu-info h3 {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 8px;
    color: #344e41;
}

.price {
    font-size: 15px;
    font-weight: 600;
    color: #cb997e;
}

/* BUTTON */
.detail-btn {
    display: inline-block;
    margin-top: 26px;
    padding: 12px 22px;
    border-radius: 30px;
    background: linear-gradient(135deg, #cb997e, #ddbea9);
    color: #fff;
    font-size: 14px;
    font-weight: 500;
    text-decoration: none;
    transition: 0.3s;
}

.detail-btn:hover {
    opacity: 0.9;
    transform: translateY(-2px);
}
/* =====================
   TITLE
===================== */
.page-title {
    font-size: 30px;
    font-weight: 800;
    margin-bottom: 26px;
    color: #1b4332;
    letter-spacing: 0.5px;
}

/* =====================
   SUMMARY CARD
===================== */
.order-summary {
    display: flex;
    gap: 40px;
    background: linear-gradient(135deg, #ffffff, #f1faee);
    padding: 26px 32px;
    border-radius: 24px;
    box-shadow: 0 18px 45px rgba(0,0,0,0.12);
    max-width: 720px;
    margin-bottom: 44px;
    border-left: 6px solid #52b788;
}

.summary-item span {
    display: block;
    font-size: 13px;
    color: #6c757d;
    margin-bottom: 6px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.summary-item strong {
    font-size: 17px;
    color: #1b4332;
}

/* =====================
   TABLE WRAPPER
===================== */
.table-wrapper {
    overflow-x: auto;
}

/* =====================
   TABLE
===================== */
.order-table {
    width: 100%;
    border-collapse: collapse;
    background: #ffffff;
    border-radius: 22px;
    overflow: hidden;
    box-shadow: 0 20px 45px rgba(0,0,0,0.12);
}

/* HEADER */
.order-table thead {
    background: linear-gradient(135deg, #74c69d, #52b788);
}

.order-table th {
    padding: 18px;
    font-size: 14px;
    font-weight: 700;
    text-align: left;
    color: #ffffff;
    letter-spacing: 0.4px;
}

/* BODY */
.order-table td {
    padding: 15px 18px;
    border-top: 1px solid #f0f0f0;
    font-size: 14px;
    color: #344e41;
}

.order-table tr:hover {
    background: #f8fff9;
}

/* ALIGNMENT */
.center {
    text-align: center;
}

.right {
    text-align: right;
}

/* =====================
   TOTAL
===================== */
.order-table tfoot tr {
    background: linear-gradient(135deg, #fefae0, #faedcd);
}

.total-label {
    text-align: right;
    font-weight: 700;
    font-size: 15px;
    color: #6a4c93;
}

.total-value {
    font-size: 18px;
    font-weight: 800;
    color: #e76f51;
}

/* =====================
   RESPONSIVE
===================== */
@media (max-width: 768px) {
    .order-summary {
        flex-direction: column;
        gap: 18px;
    }
}

.page-title {
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 10px;
    color: #2f3e46;
}

.page-desc {
    color: #666;
    margin-bottom: 30px;
    max-width: 500px;
}

/* CONTACT CARD */
.contact-card {
    max-width: 520px;
    background: #ffffff;
    border-radius: 22px;
    padding: 28px;
    box-shadow: 0 18px 40px rgba(0,0,0,0.08);
}

/* ITEM */
.contact-item {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 14px 0;
}

.contact-item:not(:last-child) {
    border-bottom: 1px solid #eee;
}

.icon {
    font-size: 22px;
}

.info span {
    display: block;
    font-size: 13px;
    color: #888;
    margin-bottom: 4px;
}

.info strong {
    font-size: 15px;
    color: #344e41;
}

.highlight {
    color: #cb997e;
    font-weight: 600;
}
/* PAGE HEADER */
.page-title {
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 6px;
    color: #2f3e46;
}

.page-desc {
    margin-bottom: 32px;
    color: #666;
    max-width: 600px;
}

/* MENU GRID */
.menu-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
    gap: 26px;
}

/* MENU CARD */
.menu-item {
    background: linear-gradient(180deg, #ffffff, #fafafa);
    border-radius: 22px;
    padding: 22px;
    box-shadow: 0 16px 35px rgba(0,0,0,0.08);
    transition: 0.35s ease;
}

.menu-item:hover {
    transform: translateY(-6px);
    box-shadow: 0 22px 45px rgba(0,0,0,0.12);
}

/* CARD CONTENT */
.menu-body h3 {
    font-size: 17px;
    font-weight: 600;
    color: #344e41;
    margin-bottom: 6px;
}

.menu-type {
    display: inline-block;
    font-size: 13px;
    padding: 4px 12px;
    border-radius: 20px;
    background: #e9edc9;
    color: #3a5a40;
    margin-bottom: 14px;
}

.menu-price {
    font-size: 15px;
    font-weight: 700;
    color: #cb997e;
}

    </style>
</head>
<body>

    <!-- NAVBAR -->
    <div class="navbar">
        <div class="brand">Catering <span>Iklil</span></div>
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/menu">Menu</a>
            <a href="/kontak">Kontak</a>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <main>
        <div class="content-wrapper">
            @yield('content')
        </div>
    </main>

    <!-- FOOTER -->
    <footer>
        © {{ date('Y') }} <strong>Catering Iklil</strong> · Crafted with care
    </footer>

</body>
</html>
