.phony:
updatemautic:
	git subtree pull --prefix mautic https://github.com/mautic/mautic 2.9.0 --squash
