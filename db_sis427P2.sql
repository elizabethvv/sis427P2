PGDMP     /    8    
    
        y            db_sis427P2    11.11    11.11 7    =           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            >           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            ?           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false            @           1262    16393    db_sis427P2    DATABASE     ?   CREATE DATABASE "db_sis427P2" WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Spanish_Bolivia.1252' LC_CTYPE = 'Spanish_Bolivia.1252';
    DROP DATABASE "db_sis427P2";
             postgres    false            ?            1259    24652    alquiler    TABLE     :   CREATE TABLE public.alquiler (
    id integer NOT NULL
);
    DROP TABLE public.alquiler;
       public         postgres    false            ?            1259    24650    alquiler_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.alquiler_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.alquiler_id_seq;
       public       postgres    false    205            A           0    0    alquiler_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.alquiler_id_seq OWNED BY public.alquiler.id;
            public       postgres    false    204            ?            1259    24608    cliente    TABLE     $  CREATE TABLE public.cliente (
    id integer NOT NULL,
    ci character varying(12),
    nombre character varying(40),
    apellidos character varying(40),
    direccion character varying(40),
    codigo_postal character varying(30),
    ciudad character varying(20),
    telefono integer
);
    DROP TABLE public.cliente;
       public         postgres    false            ?            1259    24606    cliente_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.cliente_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.cliente_id_seq;
       public       postgres    false    201            B           0    0    cliente_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.cliente_id_seq OWNED BY public.cliente.id;
            public       postgres    false    200            ?            1259    24587    inmobiliaria    TABLE       CREATE TABLE public.inmobiliaria (
    id integer NOT NULL,
    direccion character varying(40),
    codigo_postal character varying(30),
    ciudad character varying(20),
    fax character varying(20),
    telefono integer,
    zona character varying(20)
);
     DROP TABLE public.inmobiliaria;
       public         postgres    false            ?            1259    24585    inmobiliaria_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.inmobiliaria_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.inmobiliaria_id_seq;
       public       postgres    false    197            C           0    0    inmobiliaria_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.inmobiliaria_id_seq OWNED BY public.inmobiliaria.id;
            public       postgres    false    196            ?            1259    24616 	   inmuebles    TABLE     +  CREATE TABLE public.inmuebles (
    id integer NOT NULL,
    propietario character varying(40),
    direccion character varying(40),
    superficie integer,
    nro_hab integer,
    "nro_baño" integer,
    precio_venta numeric(5,2),
    precio_alquiler numeric(5,2),
    estado_hipoteca integer
);
    DROP TABLE public.inmuebles;
       public         postgres    false            ?            1259    24614    inmuebles_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.inmuebles_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.inmuebles_id_seq;
       public       postgres    false    203            D           0    0    inmuebles_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.inmuebles_id_seq OWNED BY public.inmuebles.id;
            public       postgres    false    202            ?            1259    24595    vendedor    TABLE     q  CREATE TABLE public.vendedor (
    id integer NOT NULL,
    ci character varying(12),
    nombre character varying(40),
    apellidos character varying(40),
    f_nacimiento date,
    f_contrato date,
    direccion character varying(40),
    codigo_postal character varying(30),
    ciudad character varying(20),
    telefono integer,
    zona character varying(20)
);
    DROP TABLE public.vendedor;
       public         postgres    false            ?            1259    24593    vendedor_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.vendedor_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.vendedor_id_seq;
       public       postgres    false    199            E           0    0    vendedor_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.vendedor_id_seq OWNED BY public.vendedor.id;
            public       postgres    false    198            ?            1259    24675    ventas    TABLE     8   CREATE TABLE public.ventas (
    id integer NOT NULL
);
    DROP TABLE public.ventas;
       public         postgres    false            ?            1259    24673    ventas_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.ventas_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.ventas_id_seq;
       public       postgres    false    207            F           0    0    ventas_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.ventas_id_seq OWNED BY public.ventas.id;
            public       postgres    false    206            ?
           2604    24655    alquiler id    DEFAULT     j   ALTER TABLE ONLY public.alquiler ALTER COLUMN id SET DEFAULT nextval('public.alquiler_id_seq'::regclass);
 :   ALTER TABLE public.alquiler ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    205    204    205            ?
           2604    24611 
   cliente id    DEFAULT     h   ALTER TABLE ONLY public.cliente ALTER COLUMN id SET DEFAULT nextval('public.cliente_id_seq'::regclass);
 9   ALTER TABLE public.cliente ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    201    200    201            ?
           2604    24590    inmobiliaria id    DEFAULT     r   ALTER TABLE ONLY public.inmobiliaria ALTER COLUMN id SET DEFAULT nextval('public.inmobiliaria_id_seq'::regclass);
 >   ALTER TABLE public.inmobiliaria ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    197    196    197            ?
           2604    24619    inmuebles id    DEFAULT     l   ALTER TABLE ONLY public.inmuebles ALTER COLUMN id SET DEFAULT nextval('public.inmuebles_id_seq'::regclass);
 ;   ALTER TABLE public.inmuebles ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    202    203    203            ?
           2604    24598    vendedor id    DEFAULT     j   ALTER TABLE ONLY public.vendedor ALTER COLUMN id SET DEFAULT nextval('public.vendedor_id_seq'::regclass);
 :   ALTER TABLE public.vendedor ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    198    199    199            ?
           2604    24678 	   ventas id    DEFAULT     f   ALTER TABLE ONLY public.ventas ALTER COLUMN id SET DEFAULT nextval('public.ventas_id_seq'::regclass);
 8   ALTER TABLE public.ventas ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    206    207    207            8          0    24652    alquiler 
   TABLE DATA               &   COPY public.alquiler (id) FROM stdin;
    public       postgres    false    205   ]=       4          0    24608    cliente 
   TABLE DATA               h   COPY public.cliente (id, ci, nombre, apellidos, direccion, codigo_postal, ciudad, telefono) FROM stdin;
    public       postgres    false    201   z=       0          0    24587    inmobiliaria 
   TABLE DATA               a   COPY public.inmobiliaria (id, direccion, codigo_postal, ciudad, fax, telefono, zona) FROM stdin;
    public       postgres    false    197   ?=       6          0    24616 	   inmuebles 
   TABLE DATA               ?   COPY public.inmuebles (id, propietario, direccion, superficie, nro_hab, "nro_baño", precio_venta, precio_alquiler, estado_hipoteca) FROM stdin;
    public       postgres    false    203   ?=       2          0    24595    vendedor 
   TABLE DATA               ?   COPY public.vendedor (id, ci, nombre, apellidos, f_nacimiento, f_contrato, direccion, codigo_postal, ciudad, telefono, zona) FROM stdin;
    public       postgres    false    199   ?=       :          0    24675    ventas 
   TABLE DATA               $   COPY public.ventas (id) FROM stdin;
    public       postgres    false    207   ?=       G           0    0    alquiler_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.alquiler_id_seq', 1, false);
            public       postgres    false    204            H           0    0    cliente_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.cliente_id_seq', 1, false);
            public       postgres    false    200            I           0    0    inmobiliaria_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.inmobiliaria_id_seq', 1, false);
            public       postgres    false    196            J           0    0    inmuebles_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.inmuebles_id_seq', 1, false);
            public       postgres    false    202            K           0    0    vendedor_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.vendedor_id_seq', 1, false);
            public       postgres    false    198            L           0    0    ventas_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.ventas_id_seq', 1, false);
            public       postgres    false    206            ?
           2606    24657    alquiler alquiler_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.alquiler
    ADD CONSTRAINT alquiler_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.alquiler DROP CONSTRAINT alquiler_pkey;
       public         postgres    false    205            ?
           2606    24613    cliente cliente_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.cliente
    ADD CONSTRAINT cliente_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.cliente DROP CONSTRAINT cliente_pkey;
       public         postgres    false    201            ?
           2606    24592    inmobiliaria inmobiliaria_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.inmobiliaria
    ADD CONSTRAINT inmobiliaria_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.inmobiliaria DROP CONSTRAINT inmobiliaria_pkey;
       public         postgres    false    197            ?
           2606    24621    inmuebles inmuebles_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.inmuebles
    ADD CONSTRAINT inmuebles_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.inmuebles DROP CONSTRAINT inmuebles_pkey;
       public         postgres    false    203            ?
           2606    24600    vendedor vendedor_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.vendedor
    ADD CONSTRAINT vendedor_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.vendedor DROP CONSTRAINT vendedor_pkey;
       public         postgres    false    199            ?
           2606    24680    ventas ventas_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.ventas
    ADD CONSTRAINT ventas_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.ventas DROP CONSTRAINT ventas_pkey;
       public         postgres    false    207            ?
           2606    24622    inmuebles id_cliente    FK CONSTRAINT     p   ALTER TABLE ONLY public.inmuebles
    ADD CONSTRAINT id_cliente FOREIGN KEY (id) REFERENCES public.cliente(id);
 >   ALTER TABLE ONLY public.inmuebles DROP CONSTRAINT id_cliente;
       public       postgres    false    2726    203    201            ?
           2606    24658    alquiler id_cliente    FK CONSTRAINT     o   ALTER TABLE ONLY public.alquiler
    ADD CONSTRAINT id_cliente FOREIGN KEY (id) REFERENCES public.cliente(id);
 =   ALTER TABLE ONLY public.alquiler DROP CONSTRAINT id_cliente;
       public       postgres    false    2726    201    205            ?
           2606    24681    ventas id_cliente    FK CONSTRAINT     m   ALTER TABLE ONLY public.ventas
    ADD CONSTRAINT id_cliente FOREIGN KEY (id) REFERENCES public.cliente(id);
 ;   ALTER TABLE ONLY public.ventas DROP CONSTRAINT id_cliente;
       public       postgres    false    201    207    2726            ?
           2606    24601    vendedor id_inmobiliaria    FK CONSTRAINT     y   ALTER TABLE ONLY public.vendedor
    ADD CONSTRAINT id_inmobiliaria FOREIGN KEY (id) REFERENCES public.inmobiliaria(id);
 B   ALTER TABLE ONLY public.vendedor DROP CONSTRAINT id_inmobiliaria;
       public       postgres    false    199    2722    197            ?
           2606    24627    inmuebles id_inmobiliaria    FK CONSTRAINT     z   ALTER TABLE ONLY public.inmuebles
    ADD CONSTRAINT id_inmobiliaria FOREIGN KEY (id) REFERENCES public.inmobiliaria(id);
 C   ALTER TABLE ONLY public.inmuebles DROP CONSTRAINT id_inmobiliaria;
       public       postgres    false    2722    203    197            ?
           2606    24668    alquiler id_inmueble    FK CONSTRAINT     r   ALTER TABLE ONLY public.alquiler
    ADD CONSTRAINT id_inmueble FOREIGN KEY (id) REFERENCES public.inmuebles(id);
 >   ALTER TABLE ONLY public.alquiler DROP CONSTRAINT id_inmueble;
       public       postgres    false    2728    205    203            ?
           2606    24691    ventas id_inmueble    FK CONSTRAINT     p   ALTER TABLE ONLY public.ventas
    ADD CONSTRAINT id_inmueble FOREIGN KEY (id) REFERENCES public.inmuebles(id);
 <   ALTER TABLE ONLY public.ventas DROP CONSTRAINT id_inmueble;
       public       postgres    false    2728    207    203            ?
           2606    24663    alquiler id_vendedor    FK CONSTRAINT     q   ALTER TABLE ONLY public.alquiler
    ADD CONSTRAINT id_vendedor FOREIGN KEY (id) REFERENCES public.vendedor(id);
 >   ALTER TABLE ONLY public.alquiler DROP CONSTRAINT id_vendedor;
       public       postgres    false    199    2724    205            ?
           2606    24686    ventas id_vendedor    FK CONSTRAINT     o   ALTER TABLE ONLY public.ventas
    ADD CONSTRAINT id_vendedor FOREIGN KEY (id) REFERENCES public.vendedor(id);
 <   ALTER TABLE ONLY public.ventas DROP CONSTRAINT id_vendedor;
       public       postgres    false    207    199    2724            8      x?????? ? ?      4      x?????? ? ?      0      x?????? ? ?      6      x?????? ? ?      2      x?????? ? ?      :      x?????? ? ?     