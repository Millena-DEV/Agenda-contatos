PGDMP     
    4                z            Agenda_contatos    12.10    12.10 4    A           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            B           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            C           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            D           1262    24623    Agenda_contatos    DATABASE     ?   CREATE DATABASE "Agenda_contatos" WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Portuguese_Brazil.1252' LC_CTYPE = 'Portuguese_Brazil.1252';
 !   DROP DATABASE "Agenda_contatos";
                postgres    false            ?            1259    24658    cliente    TABLE     ?   CREATE TABLE public.cliente (
    idcliente integer NOT NULL,
    nome character varying(50) NOT NULL,
    idpessoa_fisica integer NOT NULL,
    idpessoa_juridica integer NOT NULL,
    idendereco integer NOT NULL
);
    DROP TABLE public.cliente;
       public         heap    postgres    false            ?            1259    24656    cliente_idcliente_seq    SEQUENCE     ?   CREATE SEQUENCE public.cliente_idcliente_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.cliente_idcliente_seq;
       public          postgres    false    209            E           0    0    cliente_idcliente_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.cliente_idcliente_seq OWNED BY public.cliente.idcliente;
          public          postgres    false    208            ?            1259    24702    contatos    TABLE     ?   CREATE TABLE public.contatos (
    idcontato integer NOT NULL,
    idtipo_contato integer NOT NULL,
    idcliente integer NOT NULL
);
    DROP TABLE public.contatos;
       public         heap    postgres    false            ?            1259    24700    contatos_idcontato_seq    SEQUENCE     ?   CREATE SEQUENCE public.contatos_idcontato_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.contatos_idcontato_seq;
       public          postgres    false    213            F           0    0    contatos_idcontato_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.contatos_idcontato_seq OWNED BY public.contatos.idcontato;
          public          postgres    false    212            ?            1259    24650    endereco    TABLE       CREATE TABLE public.endereco (
    idendereco integer NOT NULL,
    logradouro character varying(50),
    cep character varying(10),
    numero character varying(5),
    bairro character varying(50),
    cidade character varying(50),
    estado character varying(50)
);
    DROP TABLE public.endereco;
       public         heap    postgres    false            ?            1259    24648    endereco_idendereco_seq    SEQUENCE     ?   CREATE SEQUENCE public.endereco_idendereco_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.endereco_idendereco_seq;
       public          postgres    false    207            G           0    0    endereco_idendereco_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.endereco_idendereco_seq OWNED BY public.endereco.idendereco;
          public          postgres    false    206            ?            1259    24634    pessoa_fisica    TABLE     k   CREATE TABLE public.pessoa_fisica (
    idpessoa_fisica integer NOT NULL,
    cpf character varying(11)
);
 !   DROP TABLE public.pessoa_fisica;
       public         heap    postgres    false            ?            1259    24632 !   pessoa_fisica_idpessoa_fisica_seq    SEQUENCE     ?   CREATE SEQUENCE public.pessoa_fisica_idpessoa_fisica_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 8   DROP SEQUENCE public.pessoa_fisica_idpessoa_fisica_seq;
       public          postgres    false    203            H           0    0 !   pessoa_fisica_idpessoa_fisica_seq    SEQUENCE OWNED BY     g   ALTER SEQUENCE public.pessoa_fisica_idpessoa_fisica_seq OWNED BY public.pessoa_fisica.idpessoa_fisica;
          public          postgres    false    202            ?            1259    24642    pessoa_juridica    TABLE     p   CREATE TABLE public.pessoa_juridica (
    idpessoa_juridica integer NOT NULL,
    cnpj character varying(14)
);
 #   DROP TABLE public.pessoa_juridica;
       public         heap    postgres    false            ?            1259    24640 %   pessoa_juridica_idpessoa_juridica_seq    SEQUENCE     ?   CREATE SEQUENCE public.pessoa_juridica_idpessoa_juridica_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 <   DROP SEQUENCE public.pessoa_juridica_idpessoa_juridica_seq;
       public          postgres    false    205            I           0    0 %   pessoa_juridica_idpessoa_juridica_seq    SEQUENCE OWNED BY     o   ALTER SEQUENCE public.pessoa_juridica_idpessoa_juridica_seq OWNED BY public.pessoa_juridica.idpessoa_juridica;
          public          postgres    false    204            ?            1259    24689    tipo_contato    TABLE     ?   CREATE TABLE public.tipo_contato (
    idtipo_contato integer NOT NULL,
    telefone character varying(15) NOT NULL,
    email character varying(120) NOT NULL,
    idcliente integer NOT NULL
);
     DROP TABLE public.tipo_contato;
       public         heap    postgres    false            ?            1259    24687    tipo_contato_idtipo_contato_seq    SEQUENCE     ?   CREATE SEQUENCE public.tipo_contato_idtipo_contato_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 6   DROP SEQUENCE public.tipo_contato_idtipo_contato_seq;
       public          postgres    false    211            J           0    0    tipo_contato_idtipo_contato_seq    SEQUENCE OWNED BY     c   ALTER SEQUENCE public.tipo_contato_idtipo_contato_seq OWNED BY public.tipo_contato.idtipo_contato;
          public          postgres    false    210            ?
           2604    24661    cliente idcliente    DEFAULT     v   ALTER TABLE ONLY public.cliente ALTER COLUMN idcliente SET DEFAULT nextval('public.cliente_idcliente_seq'::regclass);
 @   ALTER TABLE public.cliente ALTER COLUMN idcliente DROP DEFAULT;
       public          postgres    false    208    209    209            ?
           2604    24705    contatos idcontato    DEFAULT     x   ALTER TABLE ONLY public.contatos ALTER COLUMN idcontato SET DEFAULT nextval('public.contatos_idcontato_seq'::regclass);
 A   ALTER TABLE public.contatos ALTER COLUMN idcontato DROP DEFAULT;
       public          postgres    false    213    212    213            ?
           2604    24653    endereco idendereco    DEFAULT     z   ALTER TABLE ONLY public.endereco ALTER COLUMN idendereco SET DEFAULT nextval('public.endereco_idendereco_seq'::regclass);
 B   ALTER TABLE public.endereco ALTER COLUMN idendereco DROP DEFAULT;
       public          postgres    false    207    206    207            ?
           2604    24637    pessoa_fisica idpessoa_fisica    DEFAULT     ?   ALTER TABLE ONLY public.pessoa_fisica ALTER COLUMN idpessoa_fisica SET DEFAULT nextval('public.pessoa_fisica_idpessoa_fisica_seq'::regclass);
 L   ALTER TABLE public.pessoa_fisica ALTER COLUMN idpessoa_fisica DROP DEFAULT;
       public          postgres    false    203    202    203            ?
           2604    24645 !   pessoa_juridica idpessoa_juridica    DEFAULT     ?   ALTER TABLE ONLY public.pessoa_juridica ALTER COLUMN idpessoa_juridica SET DEFAULT nextval('public.pessoa_juridica_idpessoa_juridica_seq'::regclass);
 P   ALTER TABLE public.pessoa_juridica ALTER COLUMN idpessoa_juridica DROP DEFAULT;
       public          postgres    false    204    205    205            ?
           2604    24692    tipo_contato idtipo_contato    DEFAULT     ?   ALTER TABLE ONLY public.tipo_contato ALTER COLUMN idtipo_contato SET DEFAULT nextval('public.tipo_contato_idtipo_contato_seq'::regclass);
 J   ALTER TABLE public.tipo_contato ALTER COLUMN idtipo_contato DROP DEFAULT;
       public          postgres    false    211    210    211            :          0    24658    cliente 
   TABLE DATA           b   COPY public.cliente (idcliente, nome, idpessoa_fisica, idpessoa_juridica, idendereco) FROM stdin;
    public          postgres    false    209   ?>       >          0    24702    contatos 
   TABLE DATA           H   COPY public.contatos (idcontato, idtipo_contato, idcliente) FROM stdin;
    public          postgres    false    213   ?>       8          0    24650    endereco 
   TABLE DATA           _   COPY public.endereco (idendereco, logradouro, cep, numero, bairro, cidade, estado) FROM stdin;
    public          postgres    false    207   ?       4          0    24634    pessoa_fisica 
   TABLE DATA           =   COPY public.pessoa_fisica (idpessoa_fisica, cpf) FROM stdin;
    public          postgres    false    203   +?       6          0    24642    pessoa_juridica 
   TABLE DATA           B   COPY public.pessoa_juridica (idpessoa_juridica, cnpj) FROM stdin;
    public          postgres    false    205   H?       <          0    24689    tipo_contato 
   TABLE DATA           R   COPY public.tipo_contato (idtipo_contato, telefone, email, idcliente) FROM stdin;
    public          postgres    false    211   e?       K           0    0    cliente_idcliente_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.cliente_idcliente_seq', 1, false);
          public          postgres    false    208            L           0    0    contatos_idcontato_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.contatos_idcontato_seq', 1, false);
          public          postgres    false    212            M           0    0    endereco_idendereco_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.endereco_idendereco_seq', 1, false);
          public          postgres    false    206            N           0    0 !   pessoa_fisica_idpessoa_fisica_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('public.pessoa_fisica_idpessoa_fisica_seq', 1, false);
          public          postgres    false    202            O           0    0 %   pessoa_juridica_idpessoa_juridica_seq    SEQUENCE SET     T   SELECT pg_catalog.setval('public.pessoa_juridica_idpessoa_juridica_seq', 1, false);
          public          postgres    false    204            P           0    0    tipo_contato_idtipo_contato_seq    SEQUENCE SET     N   SELECT pg_catalog.setval('public.tipo_contato_idtipo_contato_seq', 1, false);
          public          postgres    false    210            ?
           2606    24663    cliente cliente_pkey 
   CONSTRAINT     Y   ALTER TABLE ONLY public.cliente
    ADD CONSTRAINT cliente_pkey PRIMARY KEY (idcliente);
 >   ALTER TABLE ONLY public.cliente DROP CONSTRAINT cliente_pkey;
       public            postgres    false    209            ?
           2606    24707    contatos contatos_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.contatos
    ADD CONSTRAINT contatos_pkey PRIMARY KEY (idcontato);
 @   ALTER TABLE ONLY public.contatos DROP CONSTRAINT contatos_pkey;
       public            postgres    false    213            ?
           2606    24655    endereco endereco_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.endereco
    ADD CONSTRAINT endereco_pkey PRIMARY KEY (idendereco);
 @   ALTER TABLE ONLY public.endereco DROP CONSTRAINT endereco_pkey;
       public            postgres    false    207            ?
           2606    24639     pessoa_fisica pessoa_fisica_pkey 
   CONSTRAINT     k   ALTER TABLE ONLY public.pessoa_fisica
    ADD CONSTRAINT pessoa_fisica_pkey PRIMARY KEY (idpessoa_fisica);
 J   ALTER TABLE ONLY public.pessoa_fisica DROP CONSTRAINT pessoa_fisica_pkey;
       public            postgres    false    203            ?
           2606    24647 $   pessoa_juridica pessoa_juridica_pkey 
   CONSTRAINT     q   ALTER TABLE ONLY public.pessoa_juridica
    ADD CONSTRAINT pessoa_juridica_pkey PRIMARY KEY (idpessoa_juridica);
 N   ALTER TABLE ONLY public.pessoa_juridica DROP CONSTRAINT pessoa_juridica_pkey;
       public            postgres    false    205            ?
           2606    24694    tipo_contato tipo_contato_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.tipo_contato
    ADD CONSTRAINT tipo_contato_pkey PRIMARY KEY (idtipo_contato);
 H   ALTER TABLE ONLY public.tipo_contato DROP CONSTRAINT tipo_contato_pkey;
       public            postgres    false    211            ?
           2606    24674    cliente cliente_idendereco_fkey    FK CONSTRAINT     ?   ALTER TABLE ONLY public.cliente
    ADD CONSTRAINT cliente_idendereco_fkey FOREIGN KEY (idendereco) REFERENCES public.endereco(idendereco);
 I   ALTER TABLE ONLY public.cliente DROP CONSTRAINT cliente_idendereco_fkey;
       public          postgres    false    207    209    2728            ?
           2606    24664 $   cliente cliente_idpessoa_fisica_fkey    FK CONSTRAINT     ?   ALTER TABLE ONLY public.cliente
    ADD CONSTRAINT cliente_idpessoa_fisica_fkey FOREIGN KEY (idpessoa_fisica) REFERENCES public.pessoa_fisica(idpessoa_fisica);
 N   ALTER TABLE ONLY public.cliente DROP CONSTRAINT cliente_idpessoa_fisica_fkey;
       public          postgres    false    209    2724    203            ?
           2606    24669 &   cliente cliente_idpessoa_juridica_fkey    FK CONSTRAINT     ?   ALTER TABLE ONLY public.cliente
    ADD CONSTRAINT cliente_idpessoa_juridica_fkey FOREIGN KEY (idpessoa_juridica) REFERENCES public.pessoa_juridica(idpessoa_juridica);
 P   ALTER TABLE ONLY public.cliente DROP CONSTRAINT cliente_idpessoa_juridica_fkey;
       public          postgres    false    209    2726    205            ?
           2606    24713     contatos contatos_idcliente_fkey    FK CONSTRAINT     ?   ALTER TABLE ONLY public.contatos
    ADD CONSTRAINT contatos_idcliente_fkey FOREIGN KEY (idcliente) REFERENCES public.cliente(idcliente);
 J   ALTER TABLE ONLY public.contatos DROP CONSTRAINT contatos_idcliente_fkey;
       public          postgres    false    209    213    2730            ?
           2606    24708 %   contatos contatos_idtipo_contato_fkey    FK CONSTRAINT     ?   ALTER TABLE ONLY public.contatos
    ADD CONSTRAINT contatos_idtipo_contato_fkey FOREIGN KEY (idtipo_contato) REFERENCES public.tipo_contato(idtipo_contato);
 O   ALTER TABLE ONLY public.contatos DROP CONSTRAINT contatos_idtipo_contato_fkey;
       public          postgres    false    2732    211    213            ?
           2606    24695 (   tipo_contato tipo_contato_idcliente_fkey    FK CONSTRAINT     ?   ALTER TABLE ONLY public.tipo_contato
    ADD CONSTRAINT tipo_contato_idcliente_fkey FOREIGN KEY (idcliente) REFERENCES public.cliente(idcliente);
 R   ALTER TABLE ONLY public.tipo_contato DROP CONSTRAINT tipo_contato_idcliente_fkey;
       public          postgres    false    209    211    2730            :      x?????? ? ?      >      x?????? ? ?      8      x?????? ? ?      4      x?????? ? ?      6      x?????? ? ?      <      x?????? ? ?     