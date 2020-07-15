<?php
class Pagination
{

	private $totalItems;					// Tổng số phần tử
	private $totalItemsPerPage;				// Tổng số phần tử xuất hiện trên một trang
	private $pageRange				= 5;	// Số trang xuất hiện
	private $totalPage;						// Tổng số trang
	private $currentPage			= 1;	// Trang hiện tại

	public function __construct($totalItems, $pagination)
	{
		$this->totalItems			= $totalItems;
		$this->totalItemsPerPage	= $pagination['totalItemsPerPage'];

		if ($pagination['pageRange'] % 2 == 0) $pagination['pageRange'] = $pagination['pageRange'] + 1;

		$this->pageRange			= $pagination['pageRange'];
		$this->currentPage			= $pagination['currentPage'];
		$this->totalPage			= ceil($totalItems / $pagination['totalItemsPerPage']);
	}

	public function showPagination($link)
	{
		// Pagination
		$paginationHTML = '';
		$paginationForm = '';
		if ($this->totalPage > 1) {
			$start 	= '<li class="paginate_button page-item previous disabled"><span class="page-link">Start</span></li>';
			$prev 	= '<li class="paginate_button page-item previous disabled"><span class="page-link">Previous</span></li>';
			if ($this->currentPage > 1) {

				$start 	= '<li class="paginate_button page-item next" id="example2_next"><a href="' . $link . '&page=1" aria-controls="example2"  class="page-link">Start</a></li>';
				$prev 	= '<li class="paginate_button page-item next" id="example2_next"><a href="' . $link . '&page=' . ($this->currentPage - 1) . '" aria-controls="example2"  class="page-link">Previous</a></li>';
			}

			$next 	= '<li class="paginate_button page-item previous disabled"><span class="page-link">Next</span></li>';
			$end 	= '<li class="paginate_button page-item previous disabled"><span class="page-link">End</span></li>';
			if ($this->currentPage < $this->totalPage) {
				$next 	= '<li class="paginate_button page-item next" id="example2_next"><a href="' . $link . '&page=' . ($this->currentPage + 1) . '" class="page-link">Next</a></li>';
				$end 	= '<li class="paginate_button page-item next" id="example2_next"><a href="' . $link . '&page=' . $this->totalPage . '" class="page-link">End</a></li>';
			}

			if ($this->pageRange < $this->totalPage) {
				if ($this->currentPage == 1) {
					$startPage 	= 1;
					$endPage 	= $this->pageRange;
				} else if ($this->currentPage == $this->totalPage) {
					$startPage		= $this->totalPage - $this->pageRange + 1;
					$endPage		= $this->totalPage;
				} else {
					$startPage		= $this->currentPage - ($this->pageRange - 1) / 2;
					$endPage		= $this->currentPage + ($this->pageRange - 1) / 2;

					if ($startPage < 1) {
						$endPage	= $endPage + 1;
						$startPage = 1;
					}

					if ($endPage > $this->totalPage) {
						$endPage	= $this->totalPage;
						$startPage 	= $endPage - $this->pageRange + 1;
					}
				}
			} else {
				$startPage		= 1;
				$endPage		= $this->totalPage;
			}

			$listPages = '';
			for ($i = $startPage; $i <= $endPage; $i++) {
				if ($i == $this->currentPage) {
					$listPages .= '<li class="paginate_button page-item active"><span class="page-link">' . $i . '</span></li>';
				} else {
					$listPages .= '<li class="paginate_button page-item "><a href="' . $link . '&page=' . $i . '"  class="page-link">' . $i . '</a></li>';
				}
			}
			$paginationHTML = $start . $prev . $listPages . $next . $end ;
		
			$paginationForm .='
			<div class="col-sm-12 col-md-5">
				<div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing ' . $this->currentPage . ' of ' . $this->totalPage . '</div> 
			</div>

            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                    <ul class="pagination" style="float: right;" >
						'.$paginationHTML.'
					</ul>
                </div>
            </div> ' ;
			
		}
		else
		{
			$paginationForm = '' ;
		}
		return $paginationForm;
	}
}
