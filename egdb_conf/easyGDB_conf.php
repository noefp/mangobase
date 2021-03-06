<?php
// File paths
// $root_path = "/home/noe/trop_db"; //use absolute path
$root_path = "/var/www/html"; //use absolute path

$easy_gdb_path = "$root_path/easy_gdb";
$blast_dbs_path = "$root_path/blast_dbs";
$expression_path = "$root_path/expression_data";
$downloads_path = "downloads";
$lookup_path = "$root_path/lookup"; //from root 
$images_path = "/mangobase/egdb_images";
$custom_text_path = "$root_path/mangobase/egdb_custom_text";
$species_path = "$root_path/mangobase/egdb_species";
$lab_path = "$root_path/mangobase/egdb_labs";
$annotation_links_path = "$root_path/mangobase/annotations";

// header
$dbTitle = "MangoBase";
$header_img = "header_img1.jpg";
$db_logo = "mangobase_logo.png";

// Toolbar
$tb_about = 0;
$tb_downloads = 1;
$tb_species = 0;
$tb_search_box = 1;
$tb_search = 1;
$tb_blast = 1;
$tb_jbrowse = 1;
$tb_seq_ext = 1;
$tb_annot_ext = 1;
$tb_gene_expr = 1;
$tb_lookup = 0;
$tb_more = 0;
$tb_custom = 1;

// About
$ab_citation = 1;
$ab_labs = 1;

//Gene examples
$gene_sample = "";
$input_gene_list="gene1.1
gene2.1
gene3.1";

$expr_input_gene_list="gene1
gene2
gene3
gene4
gene5
gene6
gene7
gene8
gene9
gene10";

// Tools
$max_lookup_input = 10000;
$max_extract_seq_input = 10000;
$max_blast_input = 20;
$max_expression_input = 15;

// BLAST
$blast_example=">protein_or_DNA
ATGAGTTGTGGGGAGGGATTTATGTCACCACAAATAGAGACTAAAGGAAGTGTTGGATTC
AAAGCGGGTGTTAAAGAGTACAAATTGATTTATTATACTCCTGAATACGAAACCAAAGAT
ACCGATATCTTGGTAACATTTCGAGTAACTCCTCAACCTGGAGTTTCGCCTGTAGAAGCA
GGCTTGAGCGGGCATATCGATACTGACTGATCGATCGATCGTAGCTAGCTAGCTGATCGT
CGTAGCTAGTCGATCGTA";

?>

